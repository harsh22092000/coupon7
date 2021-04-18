<?php
session_start();
$_SESSION["shopId"]=$_GET["shopId"];
$_SESSION["mrp"]=$_GET['mrp'];
header("location:couponDemoTry.php");
?>
