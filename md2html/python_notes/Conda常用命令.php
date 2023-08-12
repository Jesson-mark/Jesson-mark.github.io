
<?php 
	$page_title = "Conda常用命令";
	include "../notes_header.php";
?>
	
	<div class="main">

    <h1 id="在虚拟环境下安装spyder">在虚拟环境下安装spyder</h1>
<p>安装spyder：在某个环境中输入<code>conda install spyder</code>，即可安装spyder。 更新spyder：<code>conda update spyder</code></p>
<h1 id="spyder中快捷键">Spyder中快捷键</h1>
<p>clear，或Ctrl + L #清空控制台上的书写记录 reset,在确定提示中输入y #spyder清除变量赋值</p>
<h1 id="虚拟环境管理">虚拟环境管理</h1>
<ol style="list-style-type: decimal">
<li>创建虚拟环境：conda create/remove --name 名字 python=3.5</li>
<li>查看当前存在哪些虚拟环境：conda info -e 或者conda env list</li>
<li>查看安装了哪些包：conda list</li>
<li>检查更新当前conda：conda upgrade conda</li>
<li>重命名虚拟环境：conda 其实没有重命名指令，实现重命名是通过 clone 完成的，分两步： • 先 clone 一份 new name 的环境 ：conda create -n tf --clone rc #将环境rc克隆为tf • 删除 old name 的环境 conda remove -n rc --all</li>
</ol>
<h1 id="使用conda安装tensorflow">使用conda安装TensorFlow</h1>
<p>安装最新版本的TensorFlow 1. <code>conda install -c anaconda tensorflow</code> 2. <code>conda install --channel https://conda.anaconda.org/anaconda tensorflow=1.10.0</code></p>
<p>查看当前有哪些可以使用的tensorflow版本： <code>conda search --full --name tensorflow</code> # 镜像操作 1. 显示当前镜像：<code>conda config --show channels</code> 2. 删除镜像：<code>conda config --remove channels http:...</code> 3. 添加镜像：<code>conda config --add channels http:</code></p>

    </div>
    </body>
    </html>
    