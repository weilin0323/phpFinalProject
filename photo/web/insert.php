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
            $href=$_GET["href"];
            $contenct=$_GET["contenct"];
            $ID=$_GET["ID"];
            $link=@mysqli_connect('localhost','root','jing1030','php');
            
            if($_GET['href']!="" && $_GET['contenct']!=''){
                $SQLInsert="INSERT into board(contenct,href) VALUES('$contenct','$href')";
                $result=mysqli_query($link,$SQLInsert);
                $SQL= "SELECT * FROM board";
                if($result=mysqli_query($link,$SQL)){
                echo "<table  width=1000 height=200 cellpadding=5 border=2>";
                echo "<tr class='first'><td>"."編號"."</td><td>"."內容"."</td><td>"."</td><td>"."連結"."</td><td>"."修改"."</td><td>"."刪除"."</td></tr>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><td>".$row["ID"]."</td><td>".$row["contenct"]."</td><td>"."</td><td>".$row["href"]."</td><td>"."<a href='updateboard.php?ID=".$row['ID']."'>修改</a></td><td>"."<a href='deleteboard.php?ID=".$row['ID']."'>刪除</a>"."</td></tr>";
                    }
                echo "</table>";?>
            <?php }
            }else{
                echo "輸入值不得為空";
                header("refresh:2;url='boardmanager.php'");
            }

            mysqli_close($link);
        ?>
	</div>
    <div class="clear"></div>
    <div class="footer"></div>
    </div>

</body>
</html>

