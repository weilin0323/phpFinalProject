<?php
$link=@mysqli_connect('localhost','root','jing1030','php');//要連到的主機，使用者名稱，密碼，要連到的資料庫
if($link){
    echo "恭喜您資料庫已連結<br>";
}else{
    echo "資料庫連結失敗";
}


$SQL="SELECT * FROM home";
 if($result=mysqli_query($link,$SQL)){
     echo "<table  width=200 height=200 cellpadding=5 border=2>";
     echo "<tr><td>No</td><td>Number</td><td>Name</td><td>Sex</td><td>Grade</td></tr>";
     while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["name"]."</td><td>".$row["year"]."</td><td>".$row["department"]."</td><td>".$row["professor"]."</td><td>".$row["score"]."</td></tr>";
     }
     echo "</table>";
}

mysqli_close($link);
?>