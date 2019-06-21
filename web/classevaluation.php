
<?php
   session_start();
   $account=$_SESSION["account"];
   if(!isset($_SESSION["account"])){
	   echo "請登入";
	   header("Refresh:2;url='signin.php'");
   }
    $link=@mysqli_query('localhost','root','','php');
    $name=$_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>課程評價</title>
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
         </div>
         <div class="classcomment">
         <?php 
       $name=$_GET['name'];
       $subject=$_GET['subject'];
       echo "<form action='classdb.php?name=$name&subject=$subject' method='post' >";
   ?>

    <font face=微軟正黑體 size=24 color=black><h1>課程評價</h1></font>
    
<?php 
$name=$_GET['name'];
$subject=$_GET['subject'];
echo "【課程名稱】".$subject."</br></br>";
echo "【授課老師】".$name;   ?></br>
【修課學年】<select name="classYear" size="1" >
<option value="104-1">104-1</option>	
<option value="104-2">104-2</option>	
<option value="105-1">105-1</option>	
<option value="105-2">105-2</option>
<option value="106-1">106-1</option>
<option value="106-2">106-2</option>
<option value="107-1">107-1</option>
</select><br/>
【開課系所】<input type="text" name="department" ><br/></br>

【推薦指數】<select name="score" size="1" >
<option value="0.5">0.5</option>	
<option value="1">1</option>	
<option value="1.5">1.5</option>	
<option value="2">2</option>
<option value="2.5">2.5</option>
<option value="3">3</option>
<option value="3.5">3.5</option>
<option value="4">4</option>
<option value="4.5">4.5</option>
<option value="5">5</option>
<br/></select><br/></br>
⊙評分方式<br/><textarea name="score2" rows="10" cols="50"></textarea><br/><br/>
⊙考題與作業類型<br/><textarea name="hw" rows="10" cols="50"></textarea><br/><br/>
⊙其他補充<br/><textarea name="other" rows="10" cols="50"></textarea><br/><br/>
<input type="hidden" name="decide" value="<?php echo $_SESSION['decide']; ?>">
<!-- 加入一個隱藏變數，作為傳送判斷值使用 -->
<input type="submit" value="送出" id="enter">
</form>
         </div>
         
    </div>
    <div class="clear"></div>
    <div class="footer"></div>
    </div>

</body>
</html>
