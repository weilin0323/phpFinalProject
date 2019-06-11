<html>
    <h1>課程評價</h1>
</html>
<?php
$link=@mysqli_connect('localhost','root','a540130a','php');

$classname=$_POST["classname"];
// echo $classname;
$professor=$_POST["professor"];
$Objectives=$_POST["Objectives"];
$Evaluation=$_POST["Evaluation"];
$score=$_POST["score"];
$ID=$_POST["ID"];

$SQLUpdate="UPDATE file3 SET classname='$classname',professor='$professor',Objectives='$Objectives',Evaluation='$Evaluation',score='$score' WHERE ID=$ID";
$result=mysqli_query($link,$SQLUpdate);

$SQL="SELECT * FROM file3";
if($result=mysqli_query($link,$SQL)){
    echo "<table width=1024 height=200 cellpadding=5 border=2>";
    echo "<tr><td>"."編號"."</td><td>"."課程名稱"."</td><td>"."授課教授"."</td><td>"."教學目標"."</td><td>"."評分方式"."</td><td>"."評價"."</td><td>"."修改"."</td><td>"."刪除"."</tr>";
  //  echo "<tr><td>No</td><td>Name</td><td>Gender</td></tr>";
    while($row=mysqli_fetch_assoc($result)){
       echo "<tr>";
       echo "<td>".$row["ID"]."</td><td>".$row["classname"]."</td><td>".$row["professor"]."</td><td>".$row["Objectives"]."</td><td>".$row["Evaluation"]."</td><td>".$row["score"]."</td><td><a href='updatescore.php?ID=".$row['ID']."'>修改</a></td>"."<td><a href='deletescore.php?ID=".$row['ID']."'>刪除</a></tr>";
    }
    echo "</table>";
}
?>
<html><a href="admin.php">回到管理者介面</a></html>