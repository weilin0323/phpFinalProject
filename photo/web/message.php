<!DOCTYPE html>
<html>
<head>
	<title>這是留言板呦</title>
</head>
<body>
<form action="" method="get" >
請輸入留言:<input type="textarea" name="message" rows="100" cols="100"></br>
<input type="submit" value="提交">
<input type="reset" value="重新填寫">
</form>
</body>
</html>

<?php
session_start();
if(isset($_GET["message"])){
	$message=$_GET["message"];
	$link=@mysqli_connect('localhost','root','jing1030','php');
	$SQLCreate="INSERT into message(content)VALUES('$message')";
	$result=mysqli_query($link,$SQLCreate); 
	$SQL="SELECT * FROM message ";
	mysqli_close($link);  //關掉放最後面
}

?>

	
