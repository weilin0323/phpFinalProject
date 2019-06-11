<?php
session_start();
// session_start();
$_SESSION["account"]=$_POST["account"];
$link=@mysqli_connect('localhost','root','jing1030','php');
// session_start();
// if(isset($_POST['account'])){
$account = $_POST["account"];
// echo $account;
$passwd = $_POST["passwd"];
// echo $passwd;
$manager = "root";
// echo $manager;
$mpw = "123456";

	$SQLexamination="SELECT * FROM user WHERE account='$account' and passwd='$passwd'";
	$result=mysqli_query($link,$SQLexamination);
	$row=mysqli_fetch_row($result);
	// echo $row[0];
	if($account==$row[0] && $passwd==$row[1]){
		header("Location:user.php");
	}
	else if($account == $manager && $passwd == $mpw){
		$_SESSION["loginadmin"]="yes";
		header("Location:admin.php");

	}	
	else{
		echo "帳號密碼錯誤,2秒後將回首頁重新登入<br/>";
		header("Refresh:2; url='signin.php'");
	}

?>