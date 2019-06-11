<?php
    session_start();
    $account=$_SESSION["account"];
    $link=@mysqli_query('localhost','root','jing1030','php');
    $name=$_GET['name'];

if(!isset($_COOKIE["count2"])){
    setcookie("count2","1"); 
    $x=($_COOKIE["count2"]);
}
else{
    $x=$_COOKIE["count2"]+1;
    setcookie("count2",$x);
}    
    // $i=($_COOKIE["count"]);
    // echo "使用次數".$i."</br>";
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
                     <!-- <li><a href="#">討論區</a></li> -->
                     <?php
                     if(!$account=$_SESSION["account"]){
                        echo "<li><a href='signin.php'>會員登入</a></li>";
                     }else{
                         echo "<li><a href='home.php?&logout=yes'>會員登出</a></li>";
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
         <div class="download">
    <?php
        session_start();
        $subject=$_GET['subject'];
        $name=$_GET['name'];
        //echo $name;
       $link=@mysqli_connect('localhost','root','jing1030','php');
     
            $SQL="SELECT filename,path,year,date FROM history where name='$name' and subject='$subject'  ";
           
        $result=mysqli_query($link,$SQL);
        
        if($result=mysqli_query($link,$SQL)){
            echo "<table width=800  >";
            echo "<tr class='top'><td width=150>".年份."</td><td width=450>".檔案下載."</td><td width=200>".上傳日期."</td></tr>";
                while($row=mysqli_fetch_assoc($result)){
                    // echo $row['filename'];
                    
                    for($x=0;$x<1;$x++){
                        $mydate=substr($row['date'],0,10);
                    //     echo $row['filename'];
                        echo "<tr class='low'><td width=150>".$row['year']."</td><td width=450>"."<a href='".$row['path']."'>".$row['filename']."</a></td><td width=200>".$mydate."</td></tr>";
                }  
            }
            echo "</table>";
        }    
        mysqli_close($link);
        
    ?>
         </div>
   
    </div>
    <div class="footer"></div>
    </div>

</body>
</html>
