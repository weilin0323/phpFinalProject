<?php
    session_start();
    $account=$_SESSION["account"];
    $link=@mysqli_query('localhost','root','jing1030','php');

if(!isset($_COOKIE["count"])){
    setcookie("count","1"); 
    $i=($_COOKIE["count"]);
}
else{
    $i=$_COOKIE["count"]+1;
    setcookie("count",$i,time()+60);
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
                    <!-- <div class="logout"><a href="home.php?&logout=yes">會員登出</a></div> -->
            <?php } ?>
            
                
                </div>
            </div>
            <div class="clear"></div>
            <div class="title">
                <div class="welcome"><marquee scrollamount="10" behavior="alternate">Welcome!!</marquee></div>
                <div class="logout"><a href="home.php?&logout=yes">會員登出</a></div>
            </div>
        </div>
    <div class="content">
    <div class="clear"></div>
    <form method="POST" enctype="multipart/form-data">

    考古檔案上傳：<br/>
    考古年分:<select name="year" size="1" >
		<option value="104-1">104-1</option>	
		<option value="104-2">104-2</option>	
		<option value="105-1">105-1</option>	
		<option value="105-2">105-2</option>
		<option value="106-1">106-1</option>
		<option value="106-2">106-2</option>
		<option value="107-1">107-1</option>
        <option value="107-2">107-1</option>
		</select><br/>
    <input type="file" name="file[]" multiple="multiple" draggable="true" accept=".pdf,.png,.jpg,.rar"/><br/>
    <input type="submit" value="上傳"> <input type="reset" value="重新選擇"><br/>
    </form>
    <?php
    $name=$_GET['name'];
    $subject=$_GET['subject'];
    $year=$_POST['year'];
     //echo $name;
     
    
    // echo $number;
    
        $link=@mysqli_connect('localhost','root','jing1030','php');
        $number=count($_FILES["file"]["name"]);
        for($i=0;$i<$number;$i++){
            //     echo $i;
                $filename[$i]=$_FILES["file"]["name"][$i];
                 echo $filename[$i];
                $extension[$i]=pathinfo($_FILES["file"]["name"][$i],PATHINFO_EXTENSION);//取得檔案副檔名
               // echo realpath($path['$filename[$i]']);
                $path[$i] = "/php/web/".$filename[$i];
                echo "<p>".$path[$i]."</p>";
                echo $year."<br>";
                $SQL="SELECT filename FROM $name WHERE filename='$filename[$i]'";
                $result=mysqli_query($link,$SQL);
                $row = mysqli_fetch_assoc($result);
                if($row != null){
                    echo "already exist";
                }else{
                    if(in_array($extension[$i],array('jpg','png','pdf','rar','JPG'))){
                        $SQLCreate="INSERT into $name(path, filename,year) VALUES ('$path[$i]', '$filename[$i]','$year')";  
                        $creat_result=mysqli_query($link,$SQLCreate);
                        if(copy($_FILES["file"]["tmp_name"][$i],$_FILES["file"]["name"][$i])){
                            echo $extension[$i]."檔案上傳成功"."<br/>";
                            $filename2[$i]=$_FILES['file']['name'][$i];
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
    <div class="footer"></div>
    </div>

</body>

