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
    <h1>考古</h1>
</html>
<?php
    session_start();
   $i=$_COOKIE["count"];
    echo "使用次數".$i;
    $link=@mysqli_connect('localhost','root','jing1030','php');
    $ID=$_GET["ID"];
    echo $ID;
    // if($link){
    //     echo "success";
    // }else{
    //     echo "failed";
    // }
   
    $SQL="SELECT * FROM file1";
    $result=mysqli_query($link,$SQL);
    if($result=mysqli_query($link,$SQL)){
        echo "<table  width=300 height=200 cellpadding=5 border=2>";
        echo "<tr><td>"."檔案名稱"."</td><td>"."編號"."</td><td>"."修改"."</td><td>"."刪除"."</td></tr>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row["filename"]."</td><td>".$row["ID"]."</td><td>"."<a href='updatefile.php?ID=".$row['ID']."'>修改</a>"."</td><td>"."<a href='deletefile.php?ID=".$row['ID']."'>刪除</a>"."</td></tr>";
            }
    }
      
?>
<!-- "</td><td>"."修改". -->
<!-- ."</td><td>"."<a href='update.php?ID=".$row['ID']."'>修改</a>" -->