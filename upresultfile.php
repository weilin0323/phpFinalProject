<?php

    $x=$_FILES["file"]["name"];
    $number=count($x);
    for($i=0;$i<$number;$i++){
        $extension[$i]=pathinfo($_FILES["file"]["name"][$i],PATHINFO_EXTENSION);//取得檔案副檔名
    }
   
    for($i=0;$i<$number;$i++){
        if(in_array($extension[$i],array('jpg','png','pdf'))){//檢查檔案副檔名
            if(copy($_FILES["file"]["tmp_name"][$i],$_FILES["file"]["name"][$i])){
                echo $extension[$i]."檔案上傳成功"."<br/>";
	            echo '<a href="'.$_FILES['file']['name'][$i].'">'.$_FILES['file']['name'][$i].'</a>'."</br>";//顯示檔案路徑
                unlink($_FILES["file"]["tmp_name"][$i]);
            }
        }else{
	        echo $extension[$i].'不允許該檔案格式'."</br>";
        }
    }    
?>
<html>
    <a href="upload.php">回到上傳頁面</a>
</html>    