<?php
   session_start();
   $account=$_SESSION["account"];
   if(!isset($_SESSION["account"])){
	   echo "請登入";
	   header("Refresh:2;url='signin.php'");
   }
    $link=@mysqli_query('localhost','root','jing1030','php');
    $name=$_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title></title>
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
                     <li><a href="#">課程首頁</a></li>
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
        <div class="mean">
        <?php 
            if(isset($_SESSION["account"])){ 
            $name=$_GET['name'];
            $subject=$_GET['subject'];
            echo "<span class='top'>$subject</span>";    
            echo "<ul><li><a href='information.php?name=$name&subject=$subject'>課程資訊</a></li>";
            echo "<li><a href='classdb.php?name=$name&subject=$subject'>課程評價</a></li>";
            echo "<li><a href='history.php?name=$name&subject=$subject'>歷屆考古</a></li>";
            echo "<li><a href='upload.php?name=$name&subject=$subject'>考古上傳</a></li>";
            echo "<li><a href='comment.php?name=$name&subject=$subject'>討論區</a></li></ul>";
        }
		 ?>
		 <div class="comment">
          <?php
   	     	$name=$_GET['name'];
  	    	$subject=$_GET['subject'];
	    	echo "<a href='classevaluation.php?name=$name&subject=$subject'>我要評論</a>";
          ?></div>
		 </div>
		 
		 <div class="class">
           <?php 
			session_start();
			if(!isset($_SESSION['decide'])){
				$_SESSION['decide'] = 0;} //判斷有無SESSION值，若沒有就設定一個SESSION並給予預設值
			//if(isset($_GET["subject"])&&isset($_POST["classYear"])&&isset($_POST["department"])&&isset($_GET["name"])&&isset($_POST["score"])&&isset($_POST["score2"])&&isset($_POST["hw"])&&isset($_POST["other"])){
			if($_SESSION['decide']==$_POST['decide']){  
			//若尚未處理過，在送出表單時，SESSION值會為0，因此在判斷時(0=0)會成立，並繼續處理表單資料
				$_SESSION['decide'] +=1;
			//正常透過表單按鈕送出資料，則將SESSION的值+1，並處理表單資料
			//若透過表單按扭送出資料後，又重新整理頁面，會再將SESSION+1，導致判斷時(2!=1)不進行處理直接跳出
			$subject=$_GET["subject"];
			$classyear=$_POST["classYear"];
			$department=$_POST["department"];
			$name=$_GET["name"];
			$score=$_POST["score"];
			$score2=$_POST["score2"];
			$hw=$_POST["hw"];
			$other=$_POST["other"];
			$link=@mysqli_connect('localhost','root','jing1030','php');
			// if($link){
			// 	echo "恭喜您資料庫已連結<br/>";
			// }else{
			// 	echo "資料庫連結失敗<br/>"; 
			// }
			$SQLCreate="INSERT into classevaluation(subject,classyear,department,name,score,score2,hw,other)VALUES('$subject', '$classyear','$department','$name','$score','$score2','$hw','$other')";
			$result=mysqli_query($link,$SQLCreate); 
			// //用來判斷資料庫查詢是否成功，如果查詢成功則會回傳 true，否則回傳 false，一般在與資料庫連結後才能使用
			
			$SQL="SELECT * FROM classevaluation WHERE name='$name'";
			echo "<table width=980 border=2>";
			echo "<tr id='classTop'>"."<td>"."課程名稱"."</td>"."<td>"."修課學年"."</td>"."<td>"."開課系所"."</td>"."<td>"."授課老師"."</td>"."<td>"."推薦指數"."</td>"."<td>"."評分方式"."</td>"."<td>"."考題與作業類型"."</td>"."<td>"."其他補充"."</td>"."</tr>";
			if($result=mysqli_query($link,$SQL)){
			while($row=mysqli_fetch_assoc($result))  //從資料集取得的陣列，索引值只能是 "字串" 
			echo "<tr>"."<td width=80>".$row["subject"]."</td>"."<td width=80>".$row["classyear"]."</td>"."<td width=80>".$row["department"]."</td>"."<td width=80>".$row["name"]."</td>"."<td width=80>".$row["score"]."</td>"."<td width=110 class='left'>".$row["score2"]."</td>"."<td width=350 class='left'>".$row["hw"]."</td>"."<td width=120 class='left'>".$row["other"]."</td>"."</tr>";
			 }
			echo "</table>";
			mysqli_close($link);
			}
			
			else{
				$name=$_GET['name'];
				$link=@mysqli_connect('localhost','root','jing1030','php');
				$SQL="SELECT * FROM classevaluation WHERE name='$name'";
			echo "<table width=980 border=2>";
			echo "<tr id='classTop'>"."<td>"."課程名稱"."</td>"."<td>"."修課學年"."</td>"."<td>"."開課系所"."</td>"."<td>"."授課老師"."</td>"."<td>"."推薦指數"."</td>"."<td>"."評分方式"."</td>"."<td>"."考題與作業類型"."</td>"."<td>"."其他補充"."</td>"."</tr>";
			if($result=mysqli_query($link,$SQL)){
			while($row=mysqli_fetch_assoc($result))  //從資料集取得的陣列，索引值只能是 "字串" 
			echo "<tr>"."<td width=80>".$row["subject"]."</td>"."<td width=80>".$row["classyear"]."</td>"."<td width=80>".$row["department"]."</td>"."<td width=80>".$row["name"]."</td>"."<td width=80>".$row["score"]."</td>"."<td width=110 class='left'>".$row["score2"]."</td>"."<td width=350 class='left'>".$row["hw"]."</td>"."<td width=120 class='left'>".$row["other"]."</td>"."</tr>";
			 }
			echo "</table>";
			mysqli_close($link);
			}
			 ?>
   </div>
		
   <div class="clear"></div>
		 

    <div class="footer"></div>
	</div>


</body>
</html>


