<?php
    session_start();
    
    // if(!isset($_SESSION["account"])){
    //      header("Location:signin.php");
    // }
    $account=$_SESSION["account"];
    if(!isset($_SESSION["account"])){
        echo "請登入";
        header("Refresh:2;url='signin.php'");
    }
    $link=@mysqli_query('localhost','root','jing1030','php');
    // $result = mysqli_query($link,"SELECT U_MONEY FROM user WHERE account = '$account'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>高大課程平台</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="wrap">
        <div class="header">
<div class="logo">
                <a href="#"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
            </div>
            <!-- <form action ="check2.php" method = 'post'><br/> -->
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

            <div class="clear"></div>
            <div class="title">
                <div class="welcome"><marquee scrollamount="10" behavior="alternate">Welcome!!</marquee></div>
                
            </div>
        </div>
      <div class="clear"></div>
        <div class="body">
            <div class="userinfo">
                <img class="userface" src="https://cdn1.iconfinder.com/data/icons/freeline/32/account_friend_human_man_member_person_profile_user_users-512.png" alt="">
              <p class="username">姓名：張子妍</p>
              <p class="userno">學號：A1063302</p>
            </div>
           <div class="historycomment">
             <p class="classname">經濟學</p>
             <p class="comment">老師很多考題都會從課本裡的習題出，讀熟課本內容很重要！
	其他題目也不會太艱澀，只要有讀書及格並不難哦
</p>
          </div>

        </div>
    </div>
</body>
</html>


