<html>
    <h1>課程評價</h1>    
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

$SQLUpdate="SELECT * FROM file3 WHERE ID=$ID";

if($result=mysqli_query($link,$SQLUpdate)){
    while($row=mysqli_fetch_assoc($result)){
       echo "<form action='updatescoreresult.php' method='post'>";
       echo "編號:".$row["ID"]."</br>";
       echo "<input type='hidden' value=".$row["ID"]." name='ID'>";
       echo "課程名稱: <input type='text' value=".$row["classname"]." name='classname'></br>";
       echo "授課教授: <input type='text' value=".$row["professor"]." name='professor'></br>";
       echo "教學目標: <input type='text' value=".$row["Objectives"]." name='Objectives'></br>";
       echo "評分方式: <input type='text' value=".$row["Evaluation"]." name='Evaluation'></br>";
       echo "評分: <input type='text' value=".$row["score"]." name='score'></br>";
       echo "<input type='submit'>";
       echo "</from>"; 
    }
}
mysqli_close($link);

?>