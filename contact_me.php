<?php 
	$page_title = "联系我们";
	$comment = "您宝贵的建议是我们进步的最大动力";
	include "header.php";
?>
<link rel="stylesheet" href="css/style.css">
	<div class="contact_main">
		<input type="text" placeholder="姓名" class="input_css"/>
		<input type="text" placeholder="邮箱" class="input_css" />
		<input type="text" placeholder="电话" class="input_css" />
		<textarea name="multiline" rows="10" cols="50" placeholder="反馈" class="input_css"></textarea>
		<button type="submit" class="button_css">提交</button>
	</div>
<?php 
	include "footer.php"
?>