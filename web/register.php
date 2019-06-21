<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>會員註冊</title>
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
    <html>
    <div class="newAccount"><p>會員註冊</p>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <form name="form" method="post">
    帳號：<input type="text" name="account" /> <br>
    密碼：<input type="password" name="passwd" /> <br>
    請再輸入一次密碼 :<input type="password" class="pwd" name="passwd2" /> <br>
    <input type="submit" name="button" value="確定" />
    </form></div>   
</html>    
<?php
    if(isset($_POST['account'])){
        $account=$_POST['account'];
    // echo $account;
        $passwd=$_POST['passwd'];
    // echo $passwd;
        $passwd2=$_POST['passwd2'];
    // echo $passwd2;

        $link=@mysqli_connect('localhost','root','','php');

        $SQLexamination="SELECT * FROM user WHERE account='$account'";
        $result=mysqli_query($link,$SQLexamination);
        $row=mysqli_fetch_row($result);
    // echo $row[0];
    if($account == $row[0]){
        echo "帳號重複!!!";
        //    header("refresh:2; url=register.php");
        }
        else if($account != null && $passwd != null && $passwd2 != null && $passwd == $passwd2){
            $SQLcreate = "INSERT into user(account, passwd, passwd2) VALUES('$account', '$passwd', '$passwd2')";
            $SQL="SELECT * FROM user";
            $result=mysqli_query($link,$SQLcreate);
            if($result=mysqli_query($link,$SQL)){
                echo "註冊成功!";
                echo "2秒後回到登入頁面".header("refresh:2; url=signin.php");
            }
            else{
                echo "<script>alert('註冊失敗，請重新註冊');url=register.php;</script>";
            }
        }else{
            echo "<script>alert('註冊失敗，請重新註冊');url=register.php;</script>";
        }
    }       
?>
    </div>
    <div class="footer"></div>
    </div>
</body>
</html>
<html>
    