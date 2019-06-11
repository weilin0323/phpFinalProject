<?php
header('Content-type: text/html; charset=utf-8');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登入</title>
	<link rel="stylesheet" type="text/css" href="css/sign.css">
</head>
<body>
	<div class="header">
		<a href="home.php">返回首頁</a>
		<div class="clear"></div>
	</div>
	<div class="content">
		
		</div>
		<div class="signin">

			<font face=微軟正黑體 size=24 color=black><b>會員登入</b></font>
			<form action = 'check.php' method = 'post' id = 'loginn'><br/>
				<p id="idd">帳號：<input type="text" name="account"></p>
				<p id="pwdd">密碼：<input type="password" name="passwd"></p>
				<button type="submit" id="login">登入</button>
			</form>
			<a href="register.php"><p>會員註冊</p></a>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>
<?php
	

?>