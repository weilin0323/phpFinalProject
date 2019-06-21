<?php
 session_start();
 $link=@mysqli_connect('localhost','root','','php');
	// $account = $_POST["account"];
	// if($_GET["logout"]=="yes"){
    //     unset($_SESSION["manager"]);
    //     echo "請登入";
    //     header("Refresh:2;url=signin.php");
    // }
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
    <title>考古管理</title>
	<link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="all2.css">
</head>
<body>
<div class="wrap">
    <div class="header">
        <div class="logo">
            <a href="home.php"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
        </div>
        <div class="function">
            <div class="list">
                <ul>
                <li ><a href="classscore.php">課程評價</a></li>
                <li ><a href="uploadfile.php">考古</a></li>
                <li ><a href="commentmanager.php">評論區</a></li>
                <li ><a href="boardmanager.php">公佈欄</li>
                <li ><a href="admin.php">功能分析</a></li>
            </ul>
        </div>
        </div>
        <div class="clear"></div>
        <div class="title">
            <div class="welcome"><marquee scrollamount="10" behavior="alternate">管理員 Welcome!!</marquee></div>
            
        </div>
    </div>
    <div class="content">
        <div class="top"><h1>考古</h1></div>
		
	    <div class="innerText"> 
            <table class='table2' width=1000 height=200 cellpadding=5 border=2>
            <?php
                session_start();
                $i=$_COOKIE["count"];
            // echo "使用次數".$i;
                $link=@mysqli_connect('localhost','root','','php');
                $ID=$_GET["ID"];
                $SQL="SELECT * FROM history";
                $result=mysqli_query($link,$SQL);
                if($result=mysqli_query($link,$SQL)){
                    // echo "<table class='table2' width=1000 height=200 cellpadding=5 border=2>";
                    echo "<tr class='first'><td>"."檔案名稱"."</td><td>"."編號"."</td><td>"."教授姓名"."</td><td>"."科目"."</td><td>"."學期"."</td><td>"."上傳日期"."</td><td>"."修改"."</td><td>"."刪除"."</td></tr>";
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row["filename"]."</td><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["subject"]."</td><td>".$row["year"]."</td><td>".$row["date"]."</td><td>"."<a href='updatefile.php?ID=".$row['ID']."'>修改</a>"."</td><td>"."<a href='deletefile.php?ID=".$row['ID']."'>刪除</a>"."</td></tr>";
                        }
                }
                
            ?>
            </table>
        <div class="clear"></div>
        </div>
    </div>
    <div class="footer"></div>
</div>

</body>
</html>


