<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理課程評價</title>
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
		<div class="top"><h1>課程評價修改</h1></div>
		<div class="clear"></div>
	    <div class="innerText"> 
        <?php
            $link=@mysqli_connect('localhost','root','jing1030','php');//要連到的主機，使用者名稱，密碼，要連到的資料庫
            // if($link){
            //     echo "恭喜您資料庫已連結<br>";
            // }else{
            //     echo "資料庫連結失敗";
            // }

            $filename=$_GET["filename"];
            $ID=$_GET["ID"];

            $SQLUpdate="SELECT * FROM classevaluation WHERE ID=$ID";
            echo "<div class='change'>";
            if($result=mysqli_query($link,$SQLUpdate)){
                while($row=mysqli_fetch_assoc($result)){
                echo "<form action='updatescoreresult.php' method='post'>";
                echo "編號:".$row["ID"]."</br>";
                echo "<input type='hidden' value=".$row["ID"]." name='ID'>";
                echo "課程名稱: <input type='text' value=".$row["subject"]." name='subject'></br>";
                echo "授課教授: <input type='text' value=".$row["name"]." name='name'></br>";
                // echo "作業: <input type='text' value=".$row["hw"]." name='Objectives'></br>";
                echo "評分方式: <input type='text' value=".$row["score2"]." name='score2'></br>";
                echo "推薦指數: <input type='text' value=".$row["score"]." name='score'></br>";
                echo "<input type='submit' class='button3'></br>";
                echo "</from></div>"; 
                }
            }?>
        
        </div>
	</div>
    <div class="clear"></div>
    <div class="footer"></div>
    </div>
    <?php mysqli_close($link);

?>
</body>
</html>