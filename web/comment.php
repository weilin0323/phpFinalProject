<?php
    session_start();
    $link=@mysqli_connect('localhost','root','jing1030','php');
    $SQL="SELECT account FROM user";
   	$account = $_SESSION["account"];
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入介面</title>
	<link rel="stylesheet" type="text/css" href="admin2.css"/>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="#"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
            </div>
            <div class="clear"></div>
            <div class="title">
				<div class="welcome"><marquee scrollamount="10" behavior="alternate">Welcome!!</marquee></div>
            </div>
        </div>
    </div>
    <h1 class="me">我要回報</h1>

    <?php
    //    }
?>
<html>
    <?php
     $name=$_GET['name'];
     $subject=$_GET['subject'];
     $ID=$_GET['ID'];
    ?>
        <form action='comment.php' method='post'>
        <input type="hidden" name="name" value="<?php echo $name ?>">
        <input type="hidden" name="subject" value="<?php echo $subject ?>">
        <input type="hidden" name="ID" value="<?php echo $ID ?>">
        <textarea class="message" name="message" rows="10" cols="50"></textarea></br>
        <input type="submit" class="button">
       </form>
        <?php
            $SQL="SELECT * FROM comment";
            $result=mysqli_query($link,$SQL);
            echo "<table class='table2' width=500 height=150 cellpadding=5 border=3>";
            if($result=mysqli_query($link,$SQL)){
                while($row=mysqli_fetch_assoc($result)){
                    $i=$row["ID"];
                    echo "<tr><td><a href='answer.php?name=$name&subject=$subject&ID=$i'>".$row["comment"]."</a></td></tr>";
                }
            }
            echo "</table>";
        ?>
</html>    
<?php
    $message=$_POST['message'];
    if(isset($_POST['message'])){
        $SQLInsert="INSERT into comment(comment) VALUES('$message')";
        $result=mysqli_query($link,$SQLInsert);
        // header("Location:comment.php?name=$name&subject=$subject");
    }
    // $link=@mysqli_connect('localhost','root','jing1030','php');
    
?>