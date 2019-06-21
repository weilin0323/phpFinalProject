<?php
header('Content-type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>會員登入</title>
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
    <div class="signin">

			<h1 class="member">會員登入</h1>
			<form action = 'check.php' method = 'post' id = 'loginn'><br/>
				<p class="idd">帳號：<input type="text" name="account"></p>
				<p class="pwdd">密碼：<input type="password" name="passwd"></p>
				<button type="submit" class="login">登入</button>
			</form>
			<p class="register">還沒註冊 ?  <a href="register.php">會員註冊</a></p>
		</div>
		<div class="clear"></div>
    </div>
    <div class="footer"></div>
    </div>

</body>
</html>
o
    
