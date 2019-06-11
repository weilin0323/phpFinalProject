<?php
session_start();
 $link=@mysqli_connect('localhost','root','jing1030','php');
    // $account = $_POST["account"];
    if($_GET["logout"]=="yes"){
        unset($_SESSION["manager"]);
        echo "請登入";
        header("Refresh:2;url=signin.php");
    }
	if(!isset($_SESSION["manager"])){
		echo "非法進入!!!2秒後回登入首頁";
		header("Refresh:2;url=signin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者介面</title>
	<link rel="stylesheet" type="text/css" href="admin2.css"/>
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
            <ul>
		        <li class="classscore"><a href="classscore.php">課程評價</a></li>
		        <li class="uploadfile"><a href="uploadfile.php">考古</a></li>
                <li class="comment"><a href="commentmanager.php">評論區</a></li>
                <li class="functionresult"><a href="functionresult.php">功能分析</a></li>
            </ul>
            <h1 class="title2">評論區</h1>
            <div class="clear"></div>
        </div>
    </div>
</body>
</html>
<?php
    $link=@mysqli_connect('localhost','root','jing1030','php');
    $ID=$_GET['ID'];
    
    $SQL="SELECT * FROM comment";
    $result=mysqli_query($link,$SQL);
    echo "<table class='table2' width=500 height=200 cellpadding=5 border=2>";
    echo "<tr><td>"."檔案名稱"."</td><td>"."刪除"."</td></tr>";
            if($result=mysqli_query($link,$SQL)){
                while($row=mysqli_fetch_assoc($result)){  
                    echo "<tr><td>".$row["comment"]."<td><a href='deletecomment.php?ID=".$row['ID']."'>刪除</a></td></tr>";
                    // echo $row["comment"];    
                }
            }
    echo "</table>";
?>
<!-- <html><a href="admin.php">回到管理者介面</a></html> -->