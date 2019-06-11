<html>
    <h1>課程評價</h1>
    <link rel="stylesheet" type="text/css" href="admin.css"/>
</html>    
<?php
$title=$_GET['classscore'];
    echo $title;
    $link=@mysqli_connect('localhost','root','jing1030','php');

    $ID=$_GET["ID"];
    $SQLDelete="DELETE FROM file3 WHERE ID=$ID";
    $result=mysqli_query($link,$SQLDelete);
    $SQL= "SELECT * FROM file3";

    echo "<table width=500 height=150 cellpadding=1 border=1>";
    echo "<tr><td>"."編號"."</td><td>"."課程名稱"."</td><td>"."授課教授"."</td><td>"."教學目標"."</td><td>"."評分方式"."</td><td>"."評價"."</td><td>"."修改"."</td><td>"."刪除"."</tr>";

    mysqli_query($link,'SET NAMES utf8');
    if($result = mysqli_query($link,$SQL)){     
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["ID"]."</td><td>".$row["classname"]."</td><td>".$row["professor"]."</td><td>".$row["Objectives"]."</td><td>".$row["Evaluation"]."</td><td>".$row["score"]."</td><td><a href='updatefile.php?ID=".$row['ID']."'>修改</a></td>"."<td><a href='deletescore.php?ID=".$row['ID']."'>刪除</a></tr>";
        }
    }
    echo "</tr>";
    echo "</table>";
    mysqli_close($link);
?>