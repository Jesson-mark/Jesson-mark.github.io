
<?php 
	$page_title = "awk基本用法、解决特定问题的用法";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="基本用法">基本用法</h1>
<p><code>awk '{print $0}' aa.txt</code> #表示输出文件所有内容 $1,$2,$3…分别表示输出文件的前1，2，3列</p>
<p><code>awk '$2~123' aa.txt</code> #输出第二列匹配123的行，若要匹配字符串，则需要将字符串用双引号&quot;&quot;括起来，如<code>awk '$2~&quot;hhh&quot;' aa.txt</code> 。注：此匹配将会匹配所有包含hhh的字符串，ahhha等也会被匹配成功。 <code>awk -F: '{print $1}' aa.txt</code># -F后面跟的是输入域分隔符，即按照：来分隔文件。 <code>awk '{FS=&quot;:&quot;;OFS=&quot;#&quot;;print $1,$3}'  aa.txt</code> #FS指定输入域分隔符，OFS指定输出域分隔符，中间以分号分开</p>
<p>awk还提供了字符串处理函数，如length可以求字符串的长度，例子如下 <code>awk '{print length($1)}' aa.txt</code> #输出每一行的第一列的长度 <code>awk 'BEGIN {print substr(&quot;707-456&quot;,1,3)}'</code> #返回字符串707-456的第1个到第3个字符组成个子字符串</p>
<p><code>awk '{print NF}' file</code> # 输出文件的列数</p>
<p>awk 还具有流程控制功能，如if,while,for等。如<code>awk '{if($4&gt;3000){print $0}}' aa.txt</code> #输出第4列大于3000的所有行。</p>
<h1 id="解决特定问题的用法">解决特定问题的用法</h1>
<ol style="list-style-type: decimal">
<li><p><strong>删除空白行</strong></p>
<p><code>awk '$0 !~ /^$/' a.txt</code> <code>awk 'NF &gt; 0' a.txt</code></p></li>
<li><p><strong>匹配用法</strong></p>
<p><code>awk '$1 ~ /[3-9]/' data</code> #要匹配的内容放在//之间，^代表开头，$代表结束，~代表匹配，!~代表不匹配</p></li>
<li><p><strong>对某列求和</strong></p>
<p><code>awk '{sum+=$1};END {print sum}' test.txt</code> #对第一列求和</p></li>
<li><p><strong>根据文件最后一列的内容对文件进行排序</strong></p>
<p><code>awk '{print $NF,$0}' file.txt | sort -nr | cut -d' ' -f2-</code> 解释：首先将文件的最后一列内容添加到第一列，然后根据第一列进行排序，最后将第一列删掉</p></li>
</ol>

    </div>
    </body>
    </html>
    