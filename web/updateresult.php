<html>
    <h1>考古</h1>
</html>
<?php
$link=@mysqli_connect('localhost','root','jing1030','php');

$filename=$_POST["filename"];
$ID=$_POST["ID"];

$SQLUpdate="UPDATE file1 SET filename='$filename' WHERE ID=$ID";
$result=mysqli_query($link,$SQLUpdate);

$SQL="SELECT * FROM history";
if($result=mysqli_query($link,$SQL)){
  echo "<table class='table2' width=1000 height=200 cellpadding=5 border=2>";
    echo "<tr class='first'><td>"."檔案名稱"."</td><td>"."編號"."</td><td>"."教授姓名"."</td><td>"."科目"."</td><td>"."學期"."</td><td>"."上傳日期"."</td><td>"."修改"."</td><td>"."刪除"."</td></tr>";
    while($row=mysqli_fetch_assoc($result)){
       echo "<tr>";
       echo "<tr><td>".$row["filename"]."</td><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["subject"]."</td><td>".$row["year"]."</td><td>".$row["date"]."</td><td>"."<a href='updatefile.php?ID=".$row['ID']."'>修改</a>"."</td><td>"."<a href='deletefile.php?ID=".$row['ID']."'>刪除</a>"."</td></tr>";
    }
    echo "</table>";
}

?>