<?php
    session_start();
    $link=@mysqli_connect('localhost','root','jing1030','php');
        // $account = $_POST["account"];
    if(!isset($_SESSION["account"])){
        echo "非法進入!!!2秒後回登入首頁";
        header("Refresh:2;url=signin.php");
    }

    $name=$_GET['name'];
    $subject=$_GET['subject']; 
    $ID=$_GET["ID"];
    if(isset($_POST['ask'])){
        if($_POST['ask']!=''){
            $ask = $_POST['ask'];
            $name=$_POST['name'];
            $subject=$_POST['subject']; 
            $ID=$_POST["ID"];
            $SQLInsert="INSERT into answer(answer,ID) VALUES ('$ask','$ID')";
            $result=mysqli_query($link,$SQLInsert);
            header("Location:answer.php?name=$name&subject=$subject&ID=$ID");
        }
        
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
    <div class="discuss">
        <div class="question">
            <p>問題:</p>
        <?php
            $ID=$_GET["ID"];
            $SQL="SELECT * FROM comment WHERE comment.ID = '$ID' ";
            $result=mysqli_query($link,$SQL);
            if($result=mysqli_query($link,$SQL)){
                $row=mysqli_fetch_assoc($result);
                echo $row["comment"];    
            }
        ?>
        </div>
        <div class="answer">
            <p>留言:</p>
        <?php 
            $SQL2 ="SELECT * FROM answer WHERE ID='$ID'";
            $result2 =mysqli_query($link,$SQL2);
            while($row2 =mysqli_fetch_assoc($result2)){
                echo "<p>".$row2["answer"]."</p>";
            }
        ?>
        </div>
        <div class="ask">
            <form action="answer.php" method="post">
                <input type="hidden" name="name" value="<?php echo $name ?>">
                <input type="hidden" name="subject" value="<?php echo $subject ?>">
                <input type="hidden" name="ID" value="<?php echo $ID ?>">
                <input type="text" name="ask">
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>
<script>
    
</script>