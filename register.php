<html>
    <p>會員註冊</p>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <form name="form" method="post">
    帳號：<input type="text" name="account" /> <br>
    密碼：<input type="password" name="passwd" /> <br>
    請再輸入一次密碼 :<input type="password" name="passwd2" /> <br>
    <input type="submit" name="button" value="確定" />
    </form>
</html>    
<?php
    if(isset($_POST['account'])){
        $account=$_POST['account'];
    // echo $account;
        $passwd=$_POST['passwd'];
    // echo $passwd;
        $passwd2=$_POST['passwd2'];
    // echo $passwd2;

        $link=@mysqli_connect('localhost','root','jing1030','php');

        $SQLexamination="SELECT * FROM user WHERE account='$account'";
        $result=mysqli_query($link,$SQLexamination);
        $row=mysqli_fetch_row($result);
    // echo $row[0];
    // if($account == $row[0]){
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
                echo "註冊失敗! 2秒後回到註冊畫面";
                header("refresh:2; url=register.php");
            }
        }    
    
            
    
?>