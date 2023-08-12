
<?php 
	$page_title = "R语言的常用绘图参数";
	include "../notes_header.php";
?>
	
	<div class="main">

    <p><code>pch</code>，每个点的符号 <code>cex</code>，绘图符号大小 <code>lty</code>，连线的类型 <code>lwd</code>，连线的宽度 <code>col</code>，颜色，colors()返回所有可用的颜色; <code>font</code>，文字字体样式，如加粗，斜体等；font.lab,font.axis等表示坐标轴标签、坐标轴刻度样式; <code>las</code>，坐标轴刻度方向，1表示均竖直，2表示x轴刻度方向水平，y轴保持竖直，3表示x、y轴刻度方向均水平; <code>mar</code>，控制图形边空大小，c(5,4,3,2)表示（下，左，上，右）边空分别为5，4，3，2 <code>par(mfrow=c(2,2))</code>把绘图区域分为2*2四部分，一页四图 <code>bty</code>可以取6种字符，分别为“o”、“l”、“7”、“c”、“u”、“]”。这些字符代表6种边框。</p>
<pre><code> bty=“o” 绘制图形的上边框、下边框、左边框和右边框；注意这是小写的O
 bty=&quot;l&quot; 绘制图形的左边框和下边框；注意这是小写的L
 bty=&quot;7&quot;绘制图形的上边框和右边框；
 bty=&quot;c&quot;绘制图形的上边框、下边框和左边框；
 bty=&quot;u&quot;绘制图形的左边框、下边框和右边框；
 bty=&quot;]&quot;绘制图形的上边框、下边框和右边框；</code></pre>

    </div>
    </body>
    </html>
    