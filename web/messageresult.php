<?php
session_start();
if(isset($_POST["message"])){
	$message=$_POST["message"];
	$link=@mysqli_connect('localhost','root','jing1030','php');
	if($link){
		echo "恭喜您資料庫已連結<br/>";
	}else{
		echo "資料庫連結失敗<br/>"; 
	}
	$SQLCreate="INSERT into message(content)VALUES('$message')";
	$result=mysqli_query($link,$SQLCreate); 
	$SQL="SELECT * FROM message ";
	echo "<table width=580 height=45 cellpadding=2 border=1>";
	echo "<tr>"."<td>"."留言內容"."</td>"."</tr>";
	if($result=mysqli_query($link,$SQL)){
		while($row=mysqli_fetch_assoc($result))   
		echo "<tr>"."<td>".$row["content"]."</td>"."</tr>";
 	}
	echo "</table>";
	mysqli_close($link);  //關掉放最後面
}

?>
