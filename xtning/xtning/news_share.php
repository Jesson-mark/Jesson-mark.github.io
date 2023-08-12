<!DOCTYPE html>
<html>
<head>
	<title>新闻分享</title>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="stylesheet" href="news.css" type="text/css" />
</head>

<body bgcolor="#BCD2EE" link="#4A708B" vlink="#CD6889">
	<div class="news_list">
		<hr color="#BDBDBD" />
		<ul>
			<?php
			$news_href=fopen("news/news_href.txt","r") or die("文件打开失败");
			$news_title=fopen("news/news_title.txt","r") or die("文件打开失败");
			$news_date=fopen("news/news_date.txt","r") or die("文件打开失败");
			while(!feof($news_href)){
				$href=fgets($news_href);
				$title=fgets($news_title);
				$date=fgets($news_date);
				echo '<li><a href=',$href,' target="_blank">',$title,'</a><span class="date">---',$date,'</span></li> ';
			}
			fclose($news_href);
			fclose($news_title);
			fclose($news_date);
			?>
		</ul>
	</div>
</body>
</html>