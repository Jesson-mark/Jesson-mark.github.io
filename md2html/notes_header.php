<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title> <?php echo $page_title; ?> </title>
	<link rel="stylesheet" href="../markdown_css.css">
</head>

<body>
	<div class="header">
		<a class="top-home" href="../../index.php" target="_blank"> 杰的博客 </a>
		<h1 class="project-name"  style="color: white;margin-top: 80px;"> <?php if(isset($page_title)){echo $page_title;}; ?></h1>
		<h3> <?php if(isset($comment)){echo $comment;}; ?></h3>
	</div>