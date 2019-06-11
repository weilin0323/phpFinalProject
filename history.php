<?php
    session_start();
    $account=$_SESSION["account"];
    $link=@mysqli_query('localhost','root','jing1030','php');

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
<?php
    session_start();
    $account=$_SESSION["account"];
    $link=@mysqli_query('localhost','root','jing1030','php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="exam.css">
    <title></title>
</head>
<body>
<div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="home.php"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
            </div>
            <div class="function">
            <?php
                if(!isset($_SESSION["account"])){ ?>
                    <div class="function">
                        <div class="list">
                            <ul>
                                <li><a href="#">課程首頁</a></li>
                                <li><a href="#">討論區</a></li>
                            </ul>
                        </div>
                    </div>
            <?php }else{ ?>
                    <li><a href="information.php">課程資訊</a></li>
                    <li><a href="#">課程評價</a></li>
                    <li><a href="history.php">歷屆考古</a></li>
                    <li><a href="upload.php">考古上傳</a></li>
                    <div class="logout"><a href="home.php?&logout=yes">會員登出</a></div>
            <?php } ?>
            
                
            </div>
            <div class="clear"></div>
            <div class="title">
                <div class="welcome"><marquee scrollamount="10" behavior="alternate">Welcome!!</marquee></div>
                <!-- <div class="logout"><a href="home.php?&logout=yes">會員登出</a></div> -->
            </div>
        </div>
    <div class="content">
    檔案下載:<br/>
    
   
    <?php
        session_start();

        $name=$_GET['name'];
        //echo $name;
       $link=@mysqli_connect('localhost','root','jing1030','php');
     
            $SQL="SELECT filename,path,year,date FROM $name  ";
           
        $result=mysqli_query($link,$SQL);
        
        if($result=mysqli_query($link,$SQL)){
            echo "<table width=700 height=200 cellpadding=5 border=2>";
                while($row=mysqli_fetch_assoc($result)){
                    // echo $row['filename'];
                    for($x=0;$x<1;$x++){
                        $mydate=substr($row['date'],0,10);
                    //     echo $row['filename'];
                        echo "<tr><td>".$row['year']."</td><td>"."<a href='".$row['path']."'>".$row['filename']."</a></td><td>".$mydate."</td></tr>";
                }  
            }
            echo "</table>";
        }    
        mysqli_close($link);
        
    ?>
    </div>
    <div class="footer"></div>
    </div>

</body>
</html>