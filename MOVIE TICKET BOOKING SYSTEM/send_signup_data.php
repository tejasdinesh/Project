<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"seat_demo");

$email= $_POST['postemail'];
$uname=$_POST['postuname'];
$pass=$_POST['postpass'];
$encode_pass = base64_encode($pass);
$decode_pass=base64_decode($encode_pass);
//session_start();
//$_SESSION['email']=$email;
$query="insert into credentials values('$email','$uname','$encode_pass')";
 mysqli_query($link,$query);
$query1="select * from credentials where username='$uname' and password ='$decode_pass'";
$res =mysqli_query($link,$query1);
if(mysqli_num_rows($res)==1){
	echo "success";
}
else
{
	echo "failure";
}

?>