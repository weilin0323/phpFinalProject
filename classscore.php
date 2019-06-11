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
    $link=@mysqli_connect('localhost','root','jing1030','php');
    $SQL="SELECT * from file3";
    if($result=mysqli_query($link,$SQL)){
        echo "<table class='' width=1100 height=200 cellpadding=5 border=2>";
        echo "<tr><td>"."編號"."</td><td>"."課程名稱"."</td><td>"."授課教授"."</td><td>"."教學目標"."</td><td>"."評分方式"."</td><td>"."評價"."</td><td>"."修改"."</td><td>"."刪除"."</tr>";
        while($row=mysqli_fetch_assoc($result)){
           echo "<td>".$row["ID"]."</td><td>".$row["classname"]."</td><td>".$row["professor"]."</td><td>".$row["Objectives"]."</td><td>".$row["Evaluation"]."</td><td>".$row["score"]."</td><td><a href='updatescore.php?ID=".$row['ID']."'>修改</a></td>"."<td><a href='deletescore.php?ID=".$row['ID']."'>刪除</a></tr>";
        }
        echo "</table>";
    }
?>