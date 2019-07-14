<?php
	  
	     $link1=mysqli_connect("localhost","root","");
         mysqli_select_db($link1,"seat_demo") or die("database connection improper");

			 $log_username =  $_POST['postname'];    
			 $log_password = $_POST['postpassword'];
             $encoded_password=base64_encode($log_password);
             session_start();
             
$sql1="select * from credentials where username = '$log_username' AND password = '$encoded_password'";
			 $res1 = mysqli_query($link1,$sql1);
            $rows=mysqli_num_rows($res1);
           if($rows==1){
			   $sql2="select email from credentials where username='$log_username'";
			   $res2=mysqli_query($link1,$sql2);	
			   while($email_res=mysqli_fetch_array($res2)){
				   $_SESSION['email']=$email_res['email'];
			   } 
			      
			}
			
			
			 if($rows==1){
				 
				 echo "s";
			 }else{
				 echo "fa";
			 }
		
	  
	  ?>

