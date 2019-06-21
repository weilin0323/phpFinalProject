<?php
 session_start();
 $link=@mysqli_connect('localhost','root','jing1030','php');
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
    <title>公佈欄管理</title>
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
		<div class="top"><h1>公佈欄</h1></div>
		<div class="clear"></div>
	    <div class="innerText"> 
        <?php
            $link=@mysqli_connect('localhost','root','jing1030','php');
                $SQL="SELECT * FROM board";
                $result=mysqli_query($link,$SQL);
                if($result=mysqli_query($link,$SQL)){
                    echo "<table  width=1100  border=2>";
                    echo "<tr class='first'><td width=100>"."編號"."</td><td width=300>"."內容"."</td><td width=400>"."連結"."</td><td width=100>"."修改"."</td><td width=100>"."刪除"."</td></tr>";
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<tr><td width=100>".$row["ID"]."</td><td width=300>".$row["contenct"]."</td><td width=400>".$row["href"]."</td><td width=100>"."<a href='updateboard.php?ID=".$row['ID']."'>修改</a></td><td width=100>"."<a href='deleteboard.php?ID=".$row['ID']."'>刪除</a>"."</td></tr>";
                        }
                    echo "</table>";
                    // echo "<a href='insert.php'>新增</a>";
                }
            ?>
        <div class="clear"></div>
        <div class='change'>
                <form action="insert.php" method="get">
                    內容:<input type="text" name="contenct">
                    連結: <input type="text" name="href">
                    <input type="submit">
                </form></div>
           
        </div>
	</div>
    <div class="clear"></div>
    <div class="footer"></div>
    </div>

</body>
</html>
