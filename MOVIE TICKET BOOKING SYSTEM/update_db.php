<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"seat_demo");
//$a = array();
//$a=$_SESSION['seats'];
$tablename = $_SESSION['table_name'];
foreach($_SESSION['seats'] as $key){
	$query = "update $tablename set status = '1' where seat = $key ";
	mysqli_query($link,$query);
}
header("Location:pay.php")
?>