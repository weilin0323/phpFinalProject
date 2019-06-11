<html>
    <h1>考古</h1>
</html>
<?php
$link=@mysqli_connect('localhost','root','jing1030','php');

$filename=$_POST["filename"];
$ID=$_POST["ID"];

$SQLUpdate="UPDATE file1 SET filename='$filename' WHERE ID=$ID";
$result=mysqli_query($link,$SQLUpdate);

$SQL="SELECT * FROM file1";
if($result=mysqli_query($link,$SQL)){
    echo "<table  width=300 height=200 cellpadding=5 border=2>";
  //  echo "<tr><td>No</td><td>Name</td><td>Gender</td></tr>";
    while($row=mysqli_fetch_assoc($result)){
       echo "<tr>";
       echo "<td>".$row["ID"]."</td><td>".$row["filename"]."</td><td><a href='updatefile.php?ID=".$row['ID']."''>修改</a></td><td><a href='deletefile.php?ID=".$row['ID']."'>刪除</a></td></tr>";
    }
    echo "</table>";
}

?>