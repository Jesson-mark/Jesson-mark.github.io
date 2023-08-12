
<?php 
	$page_title = "Python中eval与exec的使用";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="eval">eval</h1>
<h3 id="使用形式">1. 使用形式</h3>
<p>eval(source, [globals, [locals]])<br />
### 2. 作用 求表达式的值，可以计算以字符串形式或代码对象给定的Python<strong>表达式</strong>的值，并返回该值；</p>
<h3 id="参数说明">3. 参数说明</h3>
<p>globals和locals参数是可选的名字空间（作用域Scope），默认作用域是当前名称空间中的变量。 ### 4. 使用示例：</p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python"><span class="bu">eval</span>(<span class="st">&#39;3+4&#39;</span>) <span class="co">#返回7</span>
ascope<span class="op">=</span>{<span class="st">&#39;x&#39;</span>:<span class="dv">3</span>,<span class="st">&#39;y&#39;</span>:<span class="dv">2</span>}<span class="op">;</span>  <span class="bu">eval</span>(<span class="st">&#39;x**y&#39;</span>,ascope) <span class="co">#将会返回3**2，即9</span>
<span class="bu">eval</span>(<span class="st">&#39;list(map(lambda x:x**2,[3,4]))&#39;</span>)  <span class="co"># 返回[9, 16]</span></code></pre></div>
<h1 id="exec">exec</h1>
<h3 id="使用形式-1">1. 使用形式</h3>
<p>exec(source, [globals, [locals]])<br />
### 2. 作用 可以执行以字符串形式或代码对象给定的Python<strong>语句</strong>，没有任何返回值。 注意该函数与eval函数的区别：eval函数的source参数是一个python表达式，而exec函数的source参数是一个python语句。 关于语句与表达式的区别可以参考我的上一篇文章<a href="https://blog.csdn.net/weixin_44843824/article/details/106581206">Python基础知识</a></p>
<h3 id="参数说明-1">3. 参数说明</h3>
<p>globals和locals参数是可选的名字空间（作用域Scope），用法同eval中的参数。 ### 4. 使用示例：</p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python"><span class="bu">exec</span>(<span class="st">&#39;3+4&#39;</span>) <span class="co">#不会输出</span>
<span class="bu">exec</span>(<span class="st">&#39;print(3+4)&#39;</span>) <span class="co">#输出7</span>
<span class="bu">exec</span>(<span class="st">&#39;f=lambda x:x\**2&#39;</span>)<span class="op">;</span> f(<span class="dv">3</span>) <span class="co">#输出9</span>
ascope<span class="op">=</span>{<span class="st">&#39;x&#39;</span>:<span class="dv">3</span>,<span class="st">&#39;y&#39;</span>:<span class="dv">2</span>}<span class="op">;</span>  <span class="bu">exec</span>(<span class="st">&#39;print(x**y)&#39;</span>,ascope) <span class="co">#将会返回3**2，即9</span></code></pre></div>
<h1 id="eval-exec的实际用途">eval, exec的实际用途</h1>
<p><strong>作用</strong>：可以动态生成代码、定义函数等。 f(x)=sin(x)+sin(2x)+sin(3x)+…+sin(99x) ; 求f(0)+f(1)+f(2)+…+f(99)</p>
<p><strong>代码如下</strong>： 1. exec实现：</p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python"><span class="im">from</span> math <span class="im">import</span> sin
funlst <span class="op">=</span> []
<span class="cf">for</span> i <span class="kw">in</span> <span class="bu">range</span>(<span class="dv">1</span>,<span class="dv">100</span>):
    <span class="bu">exec</span>(<span class="st">&#39;def sin_</span><span class="sc">{}</span><span class="st">(x):return sin(</span><span class="sc">{}</span><span class="st">*x)&#39;</span>.<span class="bu">format</span>(i,i))
    funlst.append(<span class="bu">eval</span>(<span class="st">&#39;sin_</span><span class="sc">{}</span><span class="st">&#39;</span>.<span class="bu">format</span>(i)))

result <span class="op">=</span> [<span class="bu">sum</span>(<span class="bu">map</span>(<span class="kw">lambda</span> y: y(i), funlst)) <span class="cf">for</span> i <span class="kw">in</span> <span class="bu">range</span>(<span class="dv">100</span>)]</code></pre></div>
<ol start="2" style="list-style-type: decimal">
<li>eval实现</li>
</ol>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python"><span class="im">from</span> math <span class="im">import</span> sin
funstr <span class="op">=</span> <span class="st">&#39;sin(x)&#39;</span>
<span class="cf">for</span> i <span class="kw">in</span> <span class="bu">range</span>(<span class="dv">2</span>,<span class="dv">100</span>):
    funstr <span class="op">+=</span> <span class="st">&#39;+sin(</span><span class="sc">{}</span><span class="st">*x)&#39;</span>.<span class="bu">format</span>(i)

result <span class="op">=</span> <span class="bu">map</span>(<span class="kw">lambda</span> x:<span class="bu">eval</span>(funstr),<span class="bu">range</span>(<span class="dv">100</span>))</code></pre></div>

    </div>
    </body>
    </html>
    