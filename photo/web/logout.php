<?php
session_start();
unset($_SESSION["loginuser"]);
	header("location:signin.php");
unset($_SESSION["loginadmin"]);
	header("location:signin.php");
?>