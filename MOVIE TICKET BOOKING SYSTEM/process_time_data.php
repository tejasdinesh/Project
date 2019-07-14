<?php
session_start();
 $id = $_POST['postid'];
 $_SESSION['timecode'] = $id;
$name = $_POST['postname'];
 $_SESSION['theatre'] = $name;
 $final = $_SESSION['moviecode'] . $_SESSION['timecode'];
 echo $id;
?>