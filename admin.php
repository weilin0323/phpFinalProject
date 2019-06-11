<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者介面</title>
	<link rel="stylesheet" type="text/css" href="admin.css"/>
</head>
<body>
<div class="wrap">
        <div class="header">
<div class="logo">
                <a href="#"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
            </div>
            <div class="clear"></div>
            <div class="title">
				<div class="welcome"><marquee scrollamount="10" behavior="alternate">Welcome!!</marquee></div>
</div>
<div class="clear"></div>	
</html>

<?php
session_start();
$manager = $_POST["manager"];
$mpd = $_POST["mpd"];
// $UID = $_SESSION["account"];

if(isset($_SESSION["loginadmin"])){
	echo "<p class='manager'>"."管理員"."<font color='blue'>$manager</font>"."您好!!"."</p><br/>";
	echo "<table width=300 height=200 cellpadding=5 border=2>";
	echo "<tr><td><a name='classscore' href='classscore.php'>"."課程評價"."</a></td></tr></br>";
	echo "<tr><td><a name='uploadfile' href='uploadfile.php'>"."考古"."</a></td></tr></br>";
	echo "<tr><td><a name='comment' href='comment.php'>"."評論區"."</a></td></tr></br></table>";
	// echo "<a href='logout.php'>我要登出</a>"."</br>";
}
// <ul><li class='classscore'><li class='uploadfile'><li class='comment'></ul>
else{
	echo "非法進入!!!!"."<br/>";
	echo "回到登入頁面";
	header("Refresh:1;url=signin.php");
}
?>

<html>
	<p class="logout"><a href="signin.php">我要登出</a></p><br>
</html>