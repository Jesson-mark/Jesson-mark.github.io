
<?php 
	$page_title = "basenji框架代码解密";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="basenji_train.py">basenji_train.py：</h1>
<p>代码运行流程：根据<code>params_small.json</code>文件获取模型参数与训练参数，然后使用<code>seqnn.SeqNN</code>类构建模型，然后使用<code>trainer.Trainer</code>类构建<code>seqnn_trainer</code>，以对模型进行训练，然后通过<code>seqnn_trainer</code>调用compile与fit函数执行训练。</p>
<h1 id="读入json文件">读入json文件</h1>
<p>使用以下代码读取params_small.json文件，将模型和训练的参数传给basenji_train.py的params变量</p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python"> <span class="cf">with</span> <span class="bu">open</span>(params_file) <span class="im">as</span> params_open:
   params <span class="op">=</span> json.load(params_open)
 params_model <span class="op">=</span> params[<span class="st">&#39;model&#39;</span>] <span class="co"># model参数也是一个字典</span>
 params_train <span class="op">=</span> params[<span class="st">&#39;train&#39;</span>]<span class="co"># train参数也是一个字典</span></code></pre></div>
<p>params_model内容如下： （其中trunk字典是模型每一层结构的参数，后面将被设置为seqnn_model实例的属性）</p>
<pre><code>&quot;model&quot;: {
    &quot;seq_length&quot;: 131072,
    &quot;target_length&quot;: 1024,

    &quot;augment_rc&quot;: true,
    &quot;augment_shift&quot;: 3,

    &quot;activation&quot;: &quot;gelu&quot;,
    &quot;batch_norm&quot;: true,
    &quot;bn_momentum&quot;: 0.9,

    &quot;trunk&quot;: [
        {
            &quot;name&quot;: &quot;conv_block&quot;,
            &quot;filters&quot;: 64,
            &quot;kernel_size&quot;: 15,
            &quot;pool_size&quot;: 8
        },
        {
            &quot;name&quot;: &quot;conv_tower&quot;,
            &quot;filters_init&quot;: 64,
            &quot;filters_mult&quot;: 1.125,
            &quot;kernel_size&quot;: 5,
            &quot;pool_size&quot;: 4,
            &quot;repeat&quot;: 2
        },
        {
            &quot;name&quot;: &quot;dilated_residual&quot;,
            &quot;filters&quot;: 32,
            &quot;rate_mult&quot;: 2,
            &quot;repeat&quot;: 6,
            &quot;dropout&quot;: 0.25
        },
        {
            &quot;name&quot;: &quot;conv_block&quot;,
            &quot;filters&quot;: 64,
            &quot;dropout&quot;: 0.05
        }
    ],
    &quot;head&quot;: {
        &quot;name&quot;: &quot;dense&quot;,
        &quot;units&quot;: 3,
        &quot;activation&quot;: &quot;softplus&quot;
    }
}</code></pre>
<h1 id="构建模型seqnn_model">构建模型seqnn_model</h1>
<p>接下来将<code>params_model</code>传递给<code>seqnn.SeqNN</code>来构建模型，所用命令如下：</p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python">seqnn_model <span class="op">=</span> seqnn.SeqNN(params_model) <span class="co"># line：104</span>
<span class="co"># seqnn_model的属性包含params_model中的参数，</span>
<span class="co"># 此外可以用seqnn_model.model.summary()查看模型的信息。</span></code></pre></div>
<p>该类存放于<code>seqnn.py</code>文件中，其方法有： 1. <strong>init</strong></p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python">  <span class="kw">def</span> <span class="fu">__init__</span>(<span class="va">self</span>, params):
    <span class="va">self</span>.set_defaults()
    <span class="cf">for</span> key, value <span class="kw">in</span> params.items():
      <span class="va">self</span>.<span class="fu">__setattr__</span>(key, value) <span class="co"># 将params里的属性设置为该类的实例</span>
    <span class="va">self</span>.build_model()
    <span class="va">self</span>.ensemble <span class="op">=</span> <span class="va">None</span>
    <span class="va">self</span>.embed <span class="op">=</span> <span class="va">None</span></code></pre></div>
<p>params参数即params_model字典，该构造函数将params_model中的键值对设置成seqnn_model实例的属性。</p>
<ol start="2" style="list-style-type: decimal">
<li><strong>build_blocks</strong>： <code>def build_block(self, current, block_params)</code> 参数1：current，即输入，由tf.keras.Input生成，并不带有实际的数据， 参数2：block_params，字典形式，即params_model['trunk']字典，这里面存放的是对模型的每一层的参数定义 功能：使用blocks.py中所定义的block（即卷积，全连接等操作）来对输入进行操作，并返回一个current</li>
<li><strong>build_model</strong>： <code>def build_model(self, save_reprs=False)</code> 该函数依次读取self.trunk中的参数，然后调用build_block函数构建对应的网络结构。</li>
</ol>
<h1 id="构建seqnn_trainer">构建seqnn_trainer</h1>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python">seqnn_trainer <span class="op">=</span> trainer.Trainer(params_train, train_data, eval_data, options.out_dir)</code></pre></div>
<h1 id="编译并训练模型">编译并训练模型</h1>
<p>代码如下所示：</p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python">seqnn_trainer.<span class="bu">compile</span>(seqnn_model) 
seqnn_trainer.fit(seqnn_model)</code></pre></div>

    </div>
    </body>
    </html>
    