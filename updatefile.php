<html>
    <h1>考古</h1>    
    <link rel="stylesheet" type="text/css" href="admin.css"/>
</html>

<?php
$link=@mysqli_connect('localhost','root','jing1030','php');//要連到的主機，使用者名稱，密碼，要連到的資料庫
// if($link){
//     echo "恭喜您資料庫已連結<br>";
// }else{
//     echo "資料庫連結失敗";
// }

$filename=$_GET["filename"];
$ID=$_GET["ID"];

$SQLUpdate="SELECT * FROM file1 WHERE ID=$ID";

if($result=mysqli_query($link,$SQLUpdate)){
    while($row=mysqli_fetch_assoc($result)){
       echo "<form action='updateresult.php' method='post'>";
       echo "編號:".$row["ID"]."</br>";
       echo "<input type='hidden' value=".$row["ID"]." name='ID'>";
       echo "檔案名稱: <input type='text' value=".$row["filename"]." name='filename'></br>";
       echo "<input type='submit'>";
       echo "</from>"; 
    }
}
mysqli_close($link);

?>