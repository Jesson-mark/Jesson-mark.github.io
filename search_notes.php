<?php 
	$page_title = "搜索结果";
	include "header.php";

	function search_notes($keywords){
		//该函数根据用户输入的关键词去数据库中搜索相关的笔记，并将笔记展示在下面。
	}
	
	printf('<div class="main"> 您搜索的内容是：%s</div>', $_GET["keywords"]);
	include "footer.php";
?>
