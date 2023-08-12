<!DOCTYPE html>
<html>
<head>
	<title>留言</title>
	<link rel="stylesheet" href="main.css" type="text/css" />
</head>

<body bgcolor="#BCD2EE" link="#4A708B" vlink="#CD6889">
	<div id="content" style="height:auto;">
		<hr color="#BDBDBD" />
		<div id="left">
			<p>
				<img src="img/bg_1.png" border="0" width="250px" alt="图片丢失了">
			</p>
		</div>
		<div id="right" style="width:55%;">
			<p style="font-size: 25px;">欢迎给我留言：</p>
			<form action="contact.php" method="post">
				<textarea cols="65" rows="8" name="message">
				</textarea>
				<br><br>
				用户名：<input style="font-size: 20px;" type="text" name="users"/>
				<br><br>
				邮箱：<input style="font-size: 20px;" type="text" name="contact"/>
				<br/><br/>
				<input style="font-size: 12px;" type="submit" value="提交" id="submit_msg" />
			</form>
		</div>
	</div>
</body>
