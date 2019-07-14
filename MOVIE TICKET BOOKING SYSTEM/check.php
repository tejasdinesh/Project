<?php
if(!empty($_GET['username'])){
	$username = $_GET['username'];
	$connection = mysqli_connect('localhost','root','','textile');
	if(!$connection){die("failed to connect db");}
	$sql= "select * from employee where ename ='$username'";
	$result=mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)){
		$row=mysqli_fetch_assoc($result);
		echo json_encode(['status'=>'success']);
	}else{
		echo json_encode(['status'=>'error']);
	}
}
?>