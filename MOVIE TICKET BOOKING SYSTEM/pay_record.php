<?php
session_start();
$pay=$_POST['postamount'];
$_SESSION['amount']=$pay;
$array = array();
$array=$_POST['postarray'];
$_SESSION['total_seats']=sizeof($array);
$_SESSION['seats'] =$array;
echo $_SESSION['amount'];
//echo $_SESSION['seats'];
?>