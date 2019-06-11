<?php
    session_start();
    $account=$_SESSION["account"];
    $link=@mysqli_query('localhost','root','jing1030','php');
    $name=$_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="information.css">
    <title>課程資訊</title>
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
                     <!-- <li><a href="#">討論區</a></li> -->
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
           // if(isset($_SESSION["account"])){ 
            $name=$_GET['name'];
            $subject=$_GET['subject'];
            echo "<span class='top'>$subject</span>";    
            echo "<ul><li><a href='information.php?name=$name&subject=$subject'>課程資訊</a></li>";
            echo "<li><a href='classdb.php?name=$name&subject=$subject'>課程評價</a></li>";
            echo "<li><a href='history.php?name=$name&subject=$subject'>歷屆考古</a></li>";
            echo "<li><a href='upload.php?name=$name&subject=$subject'>考古上傳</a></li>";
            echo "<li><a href='comment.php?name=$name&subject=$subject'>討論區</a></li></ul>";
        //}
         ?>
         </div>
   <div class="classinfo">
   <?php
          $name=$_GET['name'];
        if($name){
            if($name==楊書成){
                echo"<div class='picture'><img src='../photo/Henry.jpg' alt=''></div>";
            }else if($name==王凱){
                echo "<div class='picture'><img src='../photo/photo2.jpg' alt=''></div>";
            }else if($name==廖洧杰){
                echo "<div class='picture'><img src='../photo/wei2.png' alt=''></div>";
            }else if($name==王學亮){
                echo "<div class='picture'><img src='../photo/Leon2.jpg' alt=''></div>";
            }else if($name==郭英峰){
                echo "<div class='picture'><img src='../photo/Fred2.jpg' alt=''></div>";
            }else if($name==丁一賢){
                echo "<div class='picture'><img src='../photo/ting2.jpg' alt=''></div>";
            }else if($name==吳建興){
                echo "<div class='picture'><img src='../photo/James2.jpg' alt=''></div>";
            }else if($name==楊新章){
                echo "<div class='picture'><img src='../photo/HsinChang2.jpg' alt=''></div>";
            }else if($name==蕭漢威){
                echo "<div class='picture'><img src='../photo/hanwei2.png' alt=''></div>";
            }else if($name==趙建雄){
                echo "<div class='picture'><img src='../photo/Bear.png' alt=''></div>";
            }
         echo "<div class='info'>";
            $link=@mysqli_connect('localhost','root','jing1030','php');//要連到的主機，使用者名稱，密碼，要連到的資料庫
 
         $sql_information="SELECT * FROM information  where name='$name'";
         $sql_content="SELECT * FROM content c join information i on i.name=c.name and i.subject=c.subject where i.name='$name'";
          if($information_result=mysqli_query($link,$sql_information)){
              echo "<table  width=600  border=2>"; 
              while($row=mysqli_fetch_assoc($information_result))
             {
                 echo "<tr><td class='t'>課程名稱</td><td class='detail'>".$row["subject"]."</td></tr>";
                 echo "<tr><td class='t'>授課教師</td><td class='detail'>".$row["name"]."</td></tr>";
                 echo "<tr><td class='t'>學分數</td><td class='detail'>".$row["credit"]."</td></tr>";
                 echo "<tr><td class='t'>修習類別</td><td class='detail'>".$row["category"]."</td></tr>";      
              }
              echo "</table>"; 
         }
         if($information_result=mysqli_query($link,$sql_information)){
            echo "<table  width=600  border=2>";
            while($row=mysqli_fetch_assoc($information_result))
           {
               echo "<tr><td class='t2'>參考書</td></tr>";
               echo "<tr><td class='t2'>".$row["book"]."</td></tr>";
               echo "<tr><td class='t2'>教學目標</td></tr>";
               echo "<tr><td class='detail2'>".$row["objectives"]."</td></tr>";
            }
            echo "</table>";
       }
       echo"</div>";

        mysqli_close($link);
        }
         ?>
   </div>
    </div>
    <div class="footer"></div>
    </div>

</body>
</html>