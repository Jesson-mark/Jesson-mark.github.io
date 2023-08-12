<?php 
	$page_title = "Linux学习笔记"; //需要与笔记的目录同步更换
	$comment = "记录自己学习之路的点滴";
	$py_notes_path = './md2html/linux_notes/'; //仅需要该这个路径，就可以将该路径下的php文件展示出来；
	include "header.php";

	function echo_notes($notes_path){
		// 该函数用来将指定目录下面的html文件展示在相应的笔记块中
		$dir = opendir($notes_path);
		while( $file = readdir( $dir ) ) {
			if(strrchr($file, '.php') == '.php'){
				$file_name = substr($file, 0, -4);
				$special_str = array(" ","\t","\n","\r");
				$file_len = strlen($file_name);
				$file_content = file_get_contents($notes_path.$file);
				$stripped_content = str_replace($special_str, '', strip_tags($file_content));
				$new_content = mb_strcut($stripped_content, $file_len, 200);
				echo '<div class="article"><a class="article-title" href="', $notes_path.$file, '" target="new"> <span>',$file_name, 	'</span> </a><div class="article-content">', $new_content, '</div></div>';
			}
		}
		closedir($dir);
	}
	echo '<div class="notes_main"> <div class="item"> <h1>', $page_title, "</h1>", echo_notes($py_notes_path),'</div>	</div>';
	include "footer.php";
?>