<?php
session_start();
$account=$_SESSION["account"];
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>公佈欄</title>
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
                     <li><a href="home.php">首頁</a></li>
                     <li><a href="bulletinboard.php">公佈欄</a></li> 
                     <?php
                     if(!isset($_SESSION["account"])){
                        echo "<li><a href='signin.php'>會員登入</a></li>";
                     }else{
                        $yes="yes";
                        echo "<li><a href='home.php?logout=yes'>會員登出</a></li>";
                     }
                    ?>
                </ul>
            </div>
            </div>
            <div class="clear"></div>
            <div class="title">
                <div class="welcome"><marquee scrollamount="10" behavior="alternate">Welcome!!</marquee></div>
                
            </div>
        </div>
    <div class="content">
         <!-- <div class="mean"> -->
        <?php 
           // if(isset($_SESSION["account"])){ 
            // $name=$_GET['name'];
            // $subject=$_GET['subject'];
            // echo "<span class='top'>$subject</span>";    
            // echo "<ul><li><a href='information.php?name=$name&subject=$subject'>課程資訊</a></li>";
            // echo "<li><a href='classdb.php?name=$name&subject=$subject'>課程評價</a></li>";
            // echo "<li><a href='history.php?name=$name&subject=$subject'>歷屆考古</a></li>";
            // echo "<li><a href='upload.php?name=$name&subject=$subject'>考古上傳</a></li>";
            // echo "<li><a href='comment.php?name=$name&subject=$subject'>討論區</a></li></ul>";
        //}
         ?>
		 <!-- </div> -->
		 <div class="new">
			<h1 class="news">最新消息</h1>
			<div class="clear"></div>
			<div class="line"></div>
		<div class="nuknews"> <?php
				$ID=$_GET["ID"];
				$link=@mysqli_connect('localhost','root','','php');
				$SQL="SELECT * from board";
				if($result=mysqli_query($link,$SQL)){
					echo "<table class='informations' width=1024 height=200 cellpadding=5 border=2>";
					while($row=mysqli_fetch_assoc($result)){
						echo "<tr><td><a href='$row[href]'>".$row[contenct]."</td></tr></a>";
				}
				echo "</table>";
			}
		?> </div>
			</div>
   
    </div>
    <div class="footer"></div>
    </div>

</body>
</html>