<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> <?php echo $page_title; ?> </title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> <!--这个文件里存放的是css字体图标-->
</head>

<body>
	<div class="header">
		<a class="top-home" href="./index.php" target="_blank"> 杰的博客 </a>
		<h1 class="project-name"> <?php if(isset($page_title)){echo $page_title;}; ?></h1>
		<h3> <?php if(isset($comment)){echo $comment;}; ?></h3>
	</div>
	<div class="search-box">
		<form name="search" method="get" action="search_notes.php" target="_blank">
			<input class="search-txt" type="text" name="keywords" placeholder="Type to search">
			<button class="search-btn" type="submit" name="Submit" value="SEARCH">
				<i class="fa fa-search"></i> 
			</button>
		</form>
	</div>
	