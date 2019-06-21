<?php
    session_start();
    $account=$_SESSION["account"];
    if(!isset($_SESSION["account"])){
        echo "請登入";
        header("Refresh:2;url='signin.php'");
    }
    $link=@mysqli_query('localhost','root','jing1030','php');

    if(!isset($_COOKIE["count"])){
        setcookie("count","1"); 
        $i=($_COOKIE["count"]);
    }else{
        $i=$_COOKIE["count"]+1;
        setcookie("count",$i);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>考古上傳</title>
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
       // }
        ?>
        </div>
        <div class="upload">
            <form method="POST" enctype="multipart/form-data">
                <h2>考古檔案上傳</h2>
                <div class="year">
                考古年分<select name="year" size="1" >
                            <option value="104-1">104-1</option>	
                            <option value="104-2">104-2</option>	
                            <option value="105-1">105-1</option>	
                            <option value="105-2">105-2</option>
                            <option value="106-1">106-1</option>
                            <option value="106-2">106-2</option>
                            <option value="107-1">107-1</option>
                            <option value="107-2">107-2</option>
                        </select>
                </div>
                <div class="choose">
                    <input type="file" name="file[]" value="選擇檔案" multiple="multiple" draggable="true" accept=".pdf,.png,.jpg,.rar"/>
                </div>
                    <div class="button">
                        <input type="submit" value="上傳"> <input type="reset" value="重新選擇">
                    </div>
            </form>
        </div>   
        <div class="result">
            <?php
                $name=$_GET['name'];
                $subject=$_GET['subject'];
                $year=$_POST['year'];
                $link=@mysqli_connect('localhost','root','jing1030','php');
                $number=count($_FILES["file"]["name"]);
                for($i=0;$i<$number;$i++){
                //     echo $i;
                    $filename[$i]=$_FILES["file"]["name"][$i];
                    echo $filename[$i];
                    $extension[$i]=pathinfo($_FILES["file"]["name"][$i],PATHINFO_EXTENSION);//取得檔案副檔名
                // echo realpath($path['$filename[$i]']);
                    $path[$i] = "/php/web/".$filename[$i];
                    //echo "<p>".$path[$i]."</p>";
                    //echo $year."<br>";
                    $SQL="SELECT filename FROM history WHERE filename='$filename[$i]'";
                    $result=mysqli_query($link,$SQL);
                    $row = mysqli_fetch_assoc($result);
                    if($row != null){
                        echo "該檔名已經存在<br>請確認是否已經已經上傳過<br>若沒有請修改檔名，謝謝!!";
                    }else{
                        if(in_array($extension[$i],array('jpg','png','pdf','rar','JPG'))){
                            $SQLCreate="INSERT into history(path, filename,year,name,subject) VALUES ('$path[$i]', '$filename[$i]','$year','$name','$subject')";  
                            $creat_result=mysqli_query($link,$SQLCreate);
                            if(copy($_FILES["file"]["tmp_name"][$i],$_FILES["file"]["name"][$i])){
                                echo "<br>檔案上傳成功"."<br/>";
                                $filename2[$i]=$_FILES['file']['name'][$i];
                                echo "您上傳的檔案 :<br>";
                                echo '<a href="'.$_FILES['file']['name'][$i].'">'.$_FILES['file']['name'][$i].'</a>'."</br>";//顯示檔案路徑
                                unlink($_FILES["file"]["tmp_name"][$i]);
                            }
                        }else{
                            echo $extension[$i].'不允許該檔案格式'."</br>";
                        }
                    }    
                }
            mysqli_close($link);    
            ?>
        </div>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>
