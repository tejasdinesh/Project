<?php
session_start();
	$day = $_POST['postday'];
	$fullday = $_POST['postfullday'];
$_SESSION['fullday'] = $fullday;
$_SESSION['day'] = $day;
echo $_SESSION['fullday'];
?>