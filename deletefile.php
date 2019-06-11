<html>
    <h1>考古</h1>
    <link rel="stylesheet" type="text/css" href="admin.css"/>
</html>
<?php

    

    $link=@mysqli_connect('localhost','root','jing1030','php');

    $ID=$_GET["ID"];
    $SQLDelete="DELETE FROM file1 WHERE ID=$ID";
    $result=mysqli_query($link,$SQLDelete);
    $SQL= "SELECT * FROM file1";

    echo "<table width=500 height=150 cellpadding=1 border=1>";
    echo "<tr><td>"."編號"."</td><td>"."檔案名稱"."</td><td>"."修改"."</td><td>"."刪除"."</td></tr>";

    mysqli_query($link,'SET NAMES utf8');
    if($result = mysqli_query($link,$SQL)){     
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>"."<td>".$row["filename"]."<td><a href='updatefile.php?ID=".$row['ID']."'>修改</a></td>"."<td><a href='deletefile.php?ID=".$row['ID']."'>刪除</a></td>";
        }
    }
    echo "</tr>";
    echo "</table>";
    mysqli_close($link);


    // $link=@mysqli_connect('localhost','root','a540130a','php');

    // $ID=$_GET["ID"];
    // $SQLDelete="DELETE FROM file1 WHERE ID=$ID";
    // $result=mysqli_query($link,$SQLDelete);
    // $SQL= "SELECT * FROM file1";

    // echo "<table width=500 height=150 cellpadding=1 border=1>";
    // echo "<tr><td>"."編號"."</td><td>"."檔案名稱"."</td><td>"."修改"."</td><td>"."刪除"."</td></tr>";

    // mysqli_query($link,'SET NAMES utf8');
    // if($result = mysqli_query($link,$SQL)){     
    //     while($row=mysqli_fetch_assoc($result)){
    //         echo "<tr>";
    //         echo "<td>".$row["ID"]."</td>"."<td>".$row["filename"]."<td><a href='updatefile.php?ID=".$row['ID']."'>修改</a></td>"."<td><a href='deletefile.php?ID=".$row['ID']."'>刪除</a></td>";
    //     }
    // }
    // echo "</tr>";
    // echo "</table>";
    // mysqli_close($link);

?>
<!-- "</td><td><a href='update.php?ID=".$row['ID']."'>修改</a></td> -->