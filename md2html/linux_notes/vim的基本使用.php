
<?php 
	$page_title = "vim的基本使用";
	include "../notes_header.php";
?>
	
	<div class="main">

    <p>请注意： 所有以冒号:开头的命令都是在底行模式下进行的 # 底行模式下 <code>:10, d</code> #表示删除第10行 <code>:2，4d</code> #删除2-4行 <code>!ls /etc</code> #不退出vim使用shell命令，比如在vim中想查看/etc目录下文件 # 编辑模式--&gt;输入模式 i：在当前光标所在字符的前面，转为输入模式； a：在当前光标所在字符的后面，转为输入模式； o：在当前光标所在行的下方，新建一行，并转为输入模式； I：在当前光标所在行的行首，转换为输入模式 A：在当前光标所在行的行尾，转换为输入模式 O：在当前光标所在行的上方，新建一行，并转为输入模式； # 关闭文件 <code>:q</code> 退出 <code>:wq</code> = <code>:x</code> 保存并退出 <code>:q!</code> 不保存并退出 <code>:w</code> 保存 <code>ZZ</code> 保存并退出 # 跳转 1. <strong>行内跳转</strong> <code>0</code>：跳至绝对行首 <code>^</code>：跳至行首的第一个非空白字符 <code>$</code>：跳至绝对行尾 2. <strong>行间跳转</strong> <code>&lt;数字n&gt;G</code> 或 <code>:n</code> #跳转至第n行 <code>G</code>：到最后一行（编辑模式） <code>gg</code>：到第一行（编辑模式） <code>n</code>：向下移动n行（编辑模式） # 删除 <strong>在编辑模式下使用</strong> 1. <code>x</code>：剪切光标所在处的单个字符 <code>nx</code>：n为数字，表示剪切从当前位置向后的n个字符，可以使用p粘贴。 3. <code>dd</code>：删除当前行 4. <code>&lt;数字n&gt;dd</code>：删除包括当前光标所在行在内的n行，然后跳转至下一行 # 粘贴与复制 <strong>在编辑模式下使用</strong> 1. <code>yy</code>：复制一整行。 <code>&lt;n&gt;yy</code> 比如5yy，表示复制当前行向下共5行 2. <code>p</code>：粘贴到光标所在行的下一行</p>
<h1 id="撤销">撤销</h1>
<p><strong>在编辑模式下使用</strong> 1. <code>u</code> 撤销一次，可以按多次 2. <code>ctrl + r</code> 还原上一次撤销 # 重复上一次操作 .（即英文的点） # 使用vi编辑多个文件 <strong>命令</strong>：<code>vim FILE1 FILE2 FILE3</code></p>
<p>编辑时切换文件的命令（以下命令均在底行模式下输入） 1. <code>:next</code> 切换至下一个文件 2. <code>:prev</code> 切换至前一个文件 3. <code>:last</code> 切换至最后一个文件 4. <code>:first</code> 切换至第一个文件</p>
<p><strong>退出编辑</strong> <code>:qa</code> 全部退出 # 分窗口编辑多个文件 <code>vim -o file1 file2</code>：水平分割显示 <code>vim -O file1 file2</code>：垂直分割显示 # 将另外一个文件的内容追加到当前文件的后面，合并两个文件 <code>:r /path/to/somefile</code></p>
<blockquote>
<p>参考<a href="https://mp.weixin.qq.com/s?__biz=MzU4NjU4ODQ2MQ==&amp;mid=2247484114&amp;idx=1&amp;sn=d8a5fa046d0ee3eb1cb6ef8baca96780&amp;chksm=fdf84a90ca8fc38633e3960e6d2693b9db4f31bb7abdf84a0afd7cf642d69340163ad4293294&amp;mpshare=1&amp;scene=23&amp;srcid=0705dWQnlRCL1e3MgFP8SCoN#rd">生信星球对vi的介绍</a></p>
</blockquote>

    </div>
    </body>
    </html>
    