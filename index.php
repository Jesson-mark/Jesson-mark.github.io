<?php 
	$page_title = "杰的博客";
	$comment = "记录自己学习之路的点滴";
	include "header.php";

	function echo_notes($notes_path){
		// 该函数用来将指定目录下面的html文件展示在相应的笔记块中
		$dir = opendir($notes_path);
		$num = 0;
		while( $file = readdir( $dir ) ) {
			if(strrchr($file, '.php') == '.php'){
				$file_name = substr($file, 0, -4);
				$special_str = array(" ","\t","\n","\r");
				$file_len = strlen($file_name);
				$file_content = file_get_contents($notes_path.$file);
				$stripped_content = str_replace($special_str, '', strip_tags($file_content));
				$new_content = mb_strcut($stripped_content, $file_len, 200);
				echo '<div class="article"><a class="article-title" href="', $notes_path.$file, '" target="new"> <span>',$file_name, 	'</span> </a><div class="article-content">', $new_content, '</div></div>';
				$num++;
				if($num >= 3){ //最多显示3个笔记
					break;
				}
			}
		}
		closedir($dir);
	}
	function icon_more($more_path){ //该函数用来在网页中显示more图标
		echo '<div class="article"> <a href="', $more_path, '" style="margin-left: 690px;" target="_blank"> <img src="img/7.gif" 	alt="more" height="12px"> </a> </div>';
	}
?>
	<link rel="stylesheet" href="css/style.css">
	<div class="main">
		<div class="leftbar">
			<h2 > 个人简介</h2>
			<img class="radius" src="img/pikaqiu.jpg" alt="皮卡丘"/>
			<?php 
			$name_array = array("HOME", "GitHub", "Login", "WeChat", "RSS");
			$icon_array = array("fa-home", "fa-github", "fa-user", "fa-weixin", "fa-rss");
			$link_array = array("#", "https://github.com/Jesson-mark/Jesson-mark.github.io", "login.html", "https://www.w3school.com.cn/tags/index.asp", "https://www.w3school.com.cn/tags/index.asp");
			for($i=0; $i<count($name_array); $i++){
				echo '<li>
					<a class="sidebar-button-link" href="', $link_array[$i], '" target="new">
						<i class="sidebar-button-icon fa fa-lg ', $icon_array[$i], '"></i>
						<span class="sidebar-button-desc">', $name_array[$i], '</span>
					</a>
				</li>';
			}
			?>
		</div>
		<div class="rightbar ">
			<div class="item">
				<h1> Python学习笔记 </h1>
				<?php 
				$py_notes_path = './md2html/python_notes/';
				echo_notes($py_notes_path);
				icon_more("python_notes.php");
				?>
			</div>
			<div class="item">
				<h1> Linux学习笔记 </h1>
				<?php
				$linux_notes_path = './md2html/linux_notes/';
				echo_notes($linux_notes_path);
				icon_more("./linux_notes.php");
				?>
			</div>
			<div class="item">
				<h1> R语言学习笔记 </h1>
				<?php 
				$r_notes_path = './md2html/r_notes/';
				echo_notes($r_notes_path);
				icon_more("./r_notes.php");
				?>
			</div>
		</div>
	</div>
<?php 
	include "footer.php";
?>
