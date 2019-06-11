<?php
    // session_start();
    // $manager=$_POST["manager"];
    // if(!$_SESSION["manager"]){
    //     echo "非法進入!!!2秒後回登入首頁";
    //     header("Refresh:2;Location:signin.php");
    // }
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>高大課程平台</title>
    <link rel="stylesheet" href="admin1.css">
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
                <p class="logout"><a href="signin.php">我要登出</a></p><br>
            </div>
            <ul>
		<li class="classscore"><a href="classscore.php">課程評價</a></li>
		<li class="uploadfile"><a href="uploadfile.php">考古</a></li>
		<li class="comment"><a href="commentmanager.php">評論區</a></li>
		<li class="functionresult"><a href="functionresult.php">功能分析</a></li>
    </ul>
    <div class="clear"></div>
    <h1 class="title2">考古</h1>
    <link rel="stylesheet" type="text/css" href="admin1.css"/>
</html>
<?php  

    $link=@mysqli_connect('localhost','root','jing1030','php');

    $ID=$_GET["ID"];
    $SQLDelete="DELETE FROM history WHERE ID=$ID";
    $result=mysqli_query($link,$SQLDelete);
    $SQL= "SELECT * FROM history";

    echo "<table class='table2' width=1000 height=200 cellpadding=5 border=2>";
    echo "<tr class='first'><td>"."檔案名稱"."</td><td>"."編號"."</td><td>"."教授姓名"."</td><td>"."科目"."</td><td>"."學期"."</td><td>"."上傳日期"."</td><td>"."修改"."</td><td>"."刪除"."</td></tr>";

    mysqli_query($link,'SET NAMES utf8');
    if($result = mysqli_query($link,$SQL)){     
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<tr><td>".$row["filename"]."</td><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["subject"]."</td><td>".$row["year"]."</td><td>".$row["date"]."</td><td>"."<a href='updatefile.php?ID=".$row['ID']."'>修改</a>"."</td><td>"."<a href='deletefile.php?ID=".$row['ID']."'>刪除</a>"."</td></tr>";
        }
    }
    echo "</tr>";
    echo "</table>";
    mysqli_close($link);

?>
<!-- <html><a href="admin.php">回到管理者介面</a></html> -->
<!-- "</td><td><a href='update.php?ID=".$row['ID']."'>修改</a></td> -->