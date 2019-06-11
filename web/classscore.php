<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者介面</title>
	<link rel="stylesheet" type="text/css" href="admin1.css"/>
</head>
<body>
<div class="wrap">
        <div class="header">
<div class="logo">
                <a href="#"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
            </div>
            <div class="clear"></div>
            <div class="title">
                <div class="welcome"><marquee scrollamount="10" behavior="alternate">管理者 Welcome!!</marquee></div>
                <p class="logout"><a href="signin.php?logout=yes">我要登出</a></p><br>
</div>
<div class="clear"></div>
<ul>
		<li class="classscore"><a href="classscore.php">課程評價</a></li>
		<li class="uploadfile"><a href="uploadfile.php">考古</a></li>
		<li class="comment"><a href="commentmanager.php">評論區</a></li>
		<li class="functionresult"><a href="functionresult.php">功能分析</a></li>
    </ul>
    <!-- <div class="clear"></div> -->
    <h1 class="title2">課程評價</h1>
</html>

<?php
    $link=@mysqli_connect('localhost','root','jing1030','php');
    $SQL="SELECT * from classevaluation";
    if($result=mysqli_query($link,$SQL)){
        echo "<table class='table2' width=1100 height=200 cellpadding=5 border=2>";
        echo "<tr><td>"."編號"."</td><td>"."課程名稱"."</td><td>"."授課教授"."</td><td>"."系所"."</td><td>"."評分方式"."</td><td>"."評價"."</td><td>"."修改"."</td><td>"."刪除"."</tr>";
        while($row=mysqli_fetch_assoc($result)){
           echo "<td>".$row["ID"]."</td><td>".$row["subject"]."</td><td>".$row["name"]."</td><td>".$row["department"]."</td><td>".$row["score2"]."</td><td>".$row["score"]."</td><td><a href='updatescore.php?ID=".$row['ID']."'>修改</a></td>"."<td><a href='deletescore.php?ID=".$row['ID']."'>刪除</a></tr>";
        }
        echo "</table>";
    }
?>