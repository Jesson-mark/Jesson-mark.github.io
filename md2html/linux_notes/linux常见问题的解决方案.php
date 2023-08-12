
<?php 
	$page_title = "linux常见问题的解决方案";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="数值运算">数值运算</h1>
<pre class="powershell"><code>a=3 
b=\`expr $a + 10\` 
echo $b </code></pre>
<h1 id="输出内容带行号">输出内容带行号</h1>
<ol style="list-style-type: decimal">
<li><code>cat a.txt |wc -l</code>：统计行数</li>
<li><code>cat -n a.txt</code>：输出的每一行前面会带上行号</li>
<li><code>nl a.txt</code>：<code>nl</code>相当于<code>cat -n</code></li>
<li><code>grep -n string a.txt</code>：输出字符串string所在的行，前面会带上行号。</li>
</ol>
<h1 id="删除空白行">删除空白行</h1>
<p>在vi中删除空白行：<code>:g/^\s*$/d</code>，表示空白字符 在awk中删除空白行 1. <code>awk '\$0 !~ /^\$/' a.txt</code> 2. <code>awk 'NF &gt; 0' a.txt</code></p>
<pre><code>参考[该博客](https://blog.csdn.net/Eliza1130/article/details/23427385)</code></pre>
<h1 id="grep搜索带减号减号-的内容">grep搜索带减号减号-的内容</h1>
<p>&quot;-&quot;在shell中是option的前缀符号，即便被放入单引号中, 也会提示报错 <strong>解决方法</strong>： <code>grep - - &quot;-1&quot;</code> 或 <code>grep -e &quot;-1&quot;</code></p>
<p>（本文会不定期更新）</p>

    </div>
    </body>
    </html>
    