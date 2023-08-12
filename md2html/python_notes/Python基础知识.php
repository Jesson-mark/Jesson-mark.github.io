
<?php 
	$page_title = "Python基础知识";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="数据类型">数据类型</h1>
<ol style="list-style-type: decimal">
<li><strong>数值类型</strong>: 整数，分数，浮点数，复数，布尔型，字符串。</li>
<li><strong>序列类型</strong>： 字符串（str），列表（list)，元组（tuple)。</li>
<li><strong>集合类型</strong>： 字典（dict)，集合（set），冻结集 （frozenset）</li>
</ol>
<h1 id="python语句的基本规则和特殊字符">Python语句的基本规则和特殊字符：</h1>
<ul>
<li>'#'之后的字符为注释。</li>
<li>''是标准换行分隔符。</li>
<li>'\' 继续上一行。</li>
<li>';' 将两个语句连接在一行中。</li>
<li>':' 将代码块的头和体分开，用于定义函数、类以及with、for、if等语句中。</li>
<li>语句用缩进的方式体现，不同缩进度分割不同的代码块。</li>
<li>Python文件以模块的形式进行组合调用。</li>
</ul>
<h1 id="变量表达式语句">变量、表达式、语句</h1>
<ol style="list-style-type: decimal">
<li><p><strong>变量赋值</strong> a = 100 ----- 变量为int型 b = “test” ----- 变量为字符型 x=y=z=1 ----- 多重赋值。这种情况xyz三个变量的地址是一样的，即它们实际上是一个变量。 x,y,z = 1,2,”string” -----多元赋值。这种情况xyz的地址是不同的，即不同变量单独赋值。 a += 1 -----增量赋值，还包括-=、*=、/=、等，但python中没有a++，a--等自增运算符。</p></li>
<li><p><strong>表达式 – 运算符</strong>（+、-、*、 <strong> 、/、%、//） </strong>定义<strong>：表达式是由值，变量和运算符组成的。 </strong>示例**：</p>
<div class="sourceCode"><pre class="sourceCode python"><code class="sourceCode python"><span class="dv">3</span> <span class="op">+</span> <span class="dv">5</span> <span class="co"># 加法 </span>
<span class="dv">3</span> <span class="op">**</span> <span class="dv">2</span> <span class="co"># 乘方</span>
<span class="dv">5</span> <span class="op">/</span> <span class="dv">2</span> <span class="co"># 除法 </span>
<span class="dv">5</span> <span class="op">%</span> <span class="dv">2</span> <span class="co"># 模，即整除求余 </span>
<span class="co">&#39;Hello&#39;</span> <span class="op">+</span> <span class="st">&#39;World&#39;</span> <span class="co"># 字符串相加，即字符串的串接，可以将两个字符串连接到一起。</span>
[<span class="dv">1</span>,<span class="dv">2</span>] <span class="op">+</span> [<span class="dv">4</span>,<span class="dv">5</span>] <span class="co"># 列表也可以使用运算符&#39;+&#39;，表示将两个列表连接到一起。 </span>
<span class="dv">3</span> <span class="op">+</span> (<span class="dv">5</span> <span class="op">*</span> <span class="dv">4</span>) <span class="co"># 混合运算</span></code></pre></div></li>
<li><p><strong>python语句</strong> 赋值语句：message=&quot;Hello world!&quot; 此外还有if语句，for语句，while语句，with语句，函数的定义语句，return语句等。</p>
<p>个人理解：语句是python的基础表示单元，语句与表达式不同，表达式是有返回值的，而语句没有。表达式没办法出现在程序中，其必须变成语句才可以在python程序中发挥作用。</p></li>
</ol>
<h1 id="不同进制的整数的表示方法">不同进制的整数的表示方法</h1>
<p>整数默认使用10进制表示，使用内建函数bin、oct、hex可以将整数转换成 二进制、八进制和十六进制的字符串，如：bin(5); oct(9); hex(23)。</p>
<p>octal：八进制的 hexadecimal：十六进制的</p>

    </div>
    </body>
    </html>
    