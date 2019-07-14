<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"seat_demo");
$code=$_POST['postcode'];
$name = $_POST['postname'];
$_SESSION['moviecode']=$code;
$_SESSION['moviename']=$name;
 echo $_SESSION['moviename'];
?>