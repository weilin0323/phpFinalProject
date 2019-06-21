<?php
    session_start();
    $link=@mysqli_connect('localhost','root','jing1030','php');
    $SQL="SELECT account FROM user";
       $account = $_SESSION["account"];
       if(!isset($_SESSION["account"])){
           echo "請登入";
           header("Refresh:2;url='signin.php'");
       }
   	// if(!isset($SESSION_["account"])){
   	// 	echo "非法進入!!!2秒後回登入首頁";
   	// 	header("Refresh:2;url=signin.php");
   	// }
        if(!isset($_COOKIE["count3"])){
            setcookie("count3","1"); 
            $y=($_COOKIE["count3"]);
        }else{
            $y=$_COOKIE["count3"]+1;
            setcookie("count3",$y);
        } 
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        if(isset($_POST['message'])){
            $SQLInsert="INSERT into comment(comment,name,subject) VALUES('$message','$name','$subject')";
            $result=mysqli_query($link,$SQLInsert);
            // header("Location:comment.php?name=$name&subject=$subject");
        }
        // $link=@mysqli_connect('localhost','root','jing1030','php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>討論區</title>
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
         <div class="discuss">
             <div class="question">
                <h2>討論區</h2>
                <?php
                $name=$_GET['name'];
                $subject=$_GET['subject'];
                $ID=$_GET['ID'];
                
                    echo "<form action='comment.php?name=$name&subject=$subject' method='post'>"  ?>
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                    <input type="hidden" name="subject" value="<?php echo $subject ?>">
                    <input type="hidden" name="ID" value="<?php echo $ID ?>">
                    <textarea class="message" name="message" placeholder="我要提問" ></textarea></br>
                    <input type="submit" value="提問" >
                </form>
             </div>
             <div class="reply">
                <?php
                        $SQL="SELECT * FROM comment where name='$name' and subject='$subject'";
                        $result=mysqli_query($link,$SQL);
                        echo "<table class='table2' width=500 height=150 cellpadding=5 border=3>";
                        if($result=mysqli_query($link,$SQL)){
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<tr><td><a href='answer.php?name=$name&subject=$subject&ID=$row[ID]'>".$row[comment]."</a></td></tr>";
                            }
                        }
                        echo "</table>";
                    ?>
             </div>
         
         </div>
        </div>   
        <div class="clear"></div>
    <div class="footer"></div>
    </div>

</body>
</html>
