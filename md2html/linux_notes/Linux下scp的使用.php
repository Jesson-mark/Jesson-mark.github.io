
<?php 
	$page_title = "Linux下scp的使用";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="简介">简介</h1>
<p><code>scp</code>命令用来在不同的服务器之间传输文件，也可以在windows的linux子系统与服务器之间传输文件（此时<code>scp</code>命令要在子系统端运行）。</p>
<h1 id="用法">用法</h1>
<h2 id="从对方服务器接收指定文件到本服务器">1. 从对方服务器接收指定文件到本服务器</h2>
<p><strong>用法</strong>：<code>scp username@servername:/path/filename /var/www/local_dir</code>（本地目录） 其中，<code>username</code>为对方服务器的用户名，<code>servername</code>是对方服务器的IP。 <strong>举例</strong>：<code>scp root@192.168.0.101:/var/www/test.txt /var/www/local_dir</code> <strong>解释</strong>：把192.168.0.101上的<code>/var/www/test.txt</code> 的文件下载到<code>/var/www/local_dir</code>（本地目录） 中。</p>
<h2 id="将本服务器的文件传给对方服务器">2. 将本服务器的文件传给对方服务器</h2>
<p><strong>用法</strong>：<code>scp /path/filename username@servername:/path</code> <strong>举例</strong>：<code>scp /var/source/test.php  root@192.168.0.101:/var/target/</code> <strong>解释</strong>：把本服务器<code>/var/source/</code>目录下的test.php文件上传到192.168.0.101这台服务器上的<code>/var/target/</code>目录中</p>
<p><strong>用法简记</strong>：scp后面参数有两个目录，会把第一个目录下的文件传输到第二个目录中。</p>
<h2 id="指定服务器端口">3. 指定服务器端口</h2>
<p><code>scp  -P 端口名 /path/filename username@servername:/path</code></p>

    </div>
    </body>
    </html>
    