
<?php 
	$page_title = "sed基本用法";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="基本格式">基本格式</h1>
<ol style="list-style-type: decimal">
<li><code>sed '1,3 function' filename</code></li>
<li><code>sed -i '1,3function' filename</code> 命令1会将处理后的内容输出到屏幕（即标准输出），不会修改原文件; 命令2会直接修改原文件而不输出到屏幕。</li>
</ol>
<h1 id="格式解读">格式解读</h1>
<ul>
<li><code>1,3</code>表示对文件的第1行到第3行进行操作。</li>
<li><code>function</code>可以为：
<ul>
<li>a ：新增(append)，a的后面接字符串，这些字符串会追加在1，2，3行的每一行的后面。</li>
<li>i ：插入(insert)， i的后面接字符串，这些字符串会插在1，2，3行的每一行的前面。</li>
<li>c ：取代，c的后面可以接字串，这些字串可以取代 1-2之间的行。</li>
<li>d ：删除(delete)，删除1到3行，返回删除后的文件内容。</li>
<li>p ：打印内容，示例<code>sed -n '1，3p'</code> 表示打印1到3行的内容。 参数<code>-n</code>表示仅显示经过处理后的结果，不加<code>-n</code>会一起输出处理前的结果 注意：若不加-n，sed会每处理一行就输出一行，接着输出对该行处理后的结果。</li>
<li>s ：取代，基本用法为<code>'1,20s/old/new/g'</code>，表示对1-20行每一行中的单词<code>old</code>替换成单词<code>new</code>，该用法与vi中的替换用法相同；此外这个<code>s</code>动作可以搭配正则表达式。 该命令中的斜杠(/)可以替换成其他的符号（如#@$等），即命令<code>'1,20s/old/new/g'</code>等价于<code>'1,20s#old#new#g'</code>、<code>'1,20s@old@new@g'</code>，这种用法在所要匹配的内容中含有斜杠(/)时非常方便！</li>
</ul></li>
</ul>
<h1 id="具体使用示例">具体使用示例</h1>
<ol style="list-style-type: decimal">
<li>输出test.txt的第5-7行：<code>sed -n '5,7p' test.txt</code></li>
<li>删除test.txt第2-4行：<code>sed '2,4d' test.txt</code></li>
<li>删除空行：<code>sed '/^$/d' test.txt</code></li>
<li>使用sed删除换行符：<code>sed &quot;:a;N;s/\n//g;ta&quot; test.txt</code></li>
</ol>
<h1 id="在sed中引用shell变量">在sed中引用shell变量</h1>
<p><code>sed -n &quot;\${n},\${m}p&quot;</code><br />
<strong>解释</strong>：将sed命令中的单引号改为双引号即可正常引用shell的变量。</p>

    </div>
    </body>
    </html>
    