<?php

if(isset($_POST["query"]))
{
   $output='';
   $query= "SELECT * FROM movies WHERE name LIKE '%".
       $_POST["query"]."%'";  
   $result= mysqli_query($connect, $query);
   $output= '<ul class="list-unstyled">';
    if(mysqli_num_rows($result)>0)
    {
       while($row= mysqli_fetch_array($result))
       {
          $output.= '<li>'.$row["name"].'</li>';   
       }
    }
    else
    {
        $output.='<li>Movie Name Not Found</li>';
    }
    $output.='</ul>';
    echo $output;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- user-defined--> 
    <link rel="stylesheet" href="main_page_css.css"/> 
	<link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Monoton|Yellowtail" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Monoton|Playball|Rock+Salt|Yellowtail" rel="stylesheet">  
	
	  
	  <link href="css/bootstrap.min.css" rel="stylesheet" />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"> </script> 
    

    <title>RENDEZVOUS</title>
	  
	  <style>
		  .name{ 
			font-size: 60px; 
			font-family: 'Monoton', cursive;
            font-family: 'Yellowtail', cursive;
            font-family: 'Allerta Stencil', sans-serif;
		  }
		  
		  * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  margin-top: 10px;
  margin-bottom: 100px;	
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  	
}
		  .err {color: #FF0000;}
          
          ul
          {
              float:left;
              list-style:none;
              padding:8px;
              border:1px solid black;
              margin-top:0px;
          }
          
          input,ul {
              
              width:1093px;
              background-color: white;
          }
	  
	  </style>
  </head>
  <body>
    <div  style="background:#003366;padding-top:30px;padding-bottom:1px;" class="jumbotron">
       
    <!--    <div class="input-group">
      <input type="text" class="form-control" id="movie" placeholder="Search for Your Favorite Movies :) " style="width:500px;margin-left:125px;">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button">Go!</button>
      </span>
        </div>
-->
        <div id="movieList" style="width:500px;margin-left:125px;"></div>
		<!--Search bar-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#movie').keyup(function(){
                    var query=$(this).val();
                    if(query!='')
                        {
                            $.ajax({
                               url:"main_page.php",
                               method:"POST",
                               data:{query:query},
                               success:function(data)
                                {
                                  $('#movieList').fadeIn();
                                  $('#movieList').html(data);
                                
                                }
                            });
                        }
            });
                $(document).on('click','li',function(){
                    $('#movie').val($(this).text());
                    $('#movieList').fadeOut();
                });
        });
        </script>
        
        
        
        
        
        
        
        
        
        
		
		<div style="margin-top:10px;margin-left:250px;">
		
		  <span class="name"><font color="white">Rendezvous</font></span>
		  <span style="font-size:30px;font-family: 'Monoton', cursive;
            font-family: 'Yellowtail', cursive;
            font-family: 'Allerta Stencil', sans-serif;
            font-family: 'Rock Salt', cursive;
            font-family: 'Playball', cursive;"><font color="white">... Your One Stop Booking Application</font> </span>	
 <span><button type="button" id="lg" class="btn btn-outline-warning" style="margin-left:30px;margin-bottom: 20px; "  data-target="#login" data-toggle="modal">LOGIN</button></span>
													 
    </div>
        
	</div>
	  
	   <!-- login Modal -->
	  
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">WELCOME TO RENDEZVOUS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  
        <form method="post">
		  <div class="form-group">
    <label for="exampleInputEmail1">USERNAME  *</label>
    <input type="text" class="form-control" id="log_username" aria-describedby="emailHelp" placeholder="Enter Username">
    <span id="unameerrlog" class="err"></span>			  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password *</label>
    <input type="password" class="form-control" id="log_password" placeholder="Password">
	  <span id="passerrlog" class="err"></span>	 
  </div>
<center>
<button type="button" class="btn btn-primary" name="login" onclick="hello()" >Login</button></center>
		
		<script type="text/javascript">
			
		function hello(){
		     var check1=1;
			var name = document.getElementById('log_username').value;
			var password =document.getElementById('log_password').value;
			if(name==""){
				document.getElementById("unameerrlog").innerHTML="* Username field is empty";
				check1=0;
			}
			if(password==""){
				document.getElementById("passerrlog").innerHTML="* Password field is empty";
				check1=0;
			}
			 
			 if(check1==1){
				$.post("send_login_data.php",{postname:name,postpassword:password},
			function(data){
				
			  if(data){
				   if(data.length==3){
					//alert(data.length);   
				   alert("login successful");
                //Attempt to fadeout the button
                   document.getElementById("lg").innerHTML="looged In!";
                   
				  window.location.replace("main_page.php");
				   }
				  else{
					   alert(data.length);
					  alert("login failed...check your username and password !!!!")
				  }
				  
			  }
				
			}); 
			 }
			
		}  
		  
			
	  </script>	
	  		
	</form>
		  
      </div>
		
      <div class="modal-footer">
        <span>If you are a new user :</span>
        <button type="button" class="btn btn-primary" data-target="#signin" data-toggle="modal">Sign-up</button>
      </div>
    </div>
  </div>
</div>
	 <!--end of login modal-->  
	  


<!-- Modal -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">WELCOME TO RENDEZVOUS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <form method="post">
        <div class="form-group">
    <label for="exampleInputEmail1">Email address *</label>
    <input type="email" class="form-control" id="sign_email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
    <span id="emailHelp"  class="err"></span>
	  
  </div>
		   
   	<div class="form-group">
    <label for="exampleInputEmail1">USERNAME *</label>	
    <input type="text" class="form-control" id="sign_username" aria-describedby="emailHelp" placeholder="username b/w 2-20 characters" autocomplete="off">
	<span id="unameerr" class="err"></span>	
		
  </div>
	
		   <div id="result"  class="form-group"></div>
		   
  <div class="form-group">
    <label for="exampleInputPassword1">Password *</label>
    <input type="password" class="form-control" id="sign_password" placeholder="Password b/w 2-20 characters" autocomplete="off">
	 <span id="passerr" class="err"></span>
	 
  </div>
  <button type="button" class="btn btn-primary" name="sign_submit" onclick=validate()><center>Sign-Up</center></button>
		
      <script type="text/javascript">
		  
		  var check=1;
		   $(function(){
	$('#sign_username').on('keyup',function(){
		var username=$(this).val();
		var $input =$(this);
		
		if(username){
			$.ajax({
			url:'check_dup_username.php',
			method:'get',
			data:{username:username},
			success:function(response){
				response = $.parseJSON(response);
				if(response.status=='success'){
					$input.css('border','solid 2px red');
					$('#unameerr').text('username already taken');
					check=0;
				}
				else{
					$input.css('border','solid 2px #2196F3');
					$('#unameerr').text('');
				}
				console.log(response);
			}
		});
			
		}
		
	});
});	
		function validate(){
			check=1;
			var email=document.getElementById('sign_email').value;
			var uname=document.getElementById('sign_username').value;
			var pass=document.getElementById('sign_password').value;
			
			
			if(email == ""){
				document.getElementById('emailHelp').innerHTML="* Please fill in your email";
				check=0;
				return false;
			}
			
			if(email.indexOf('@')<=0){
				document.getElementById('emailHelp').innerHTML="* Enter a valid Email-id @";
				check=0;
				return false;
			}
			
			if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
				document.getElementById('emailHelp').innerHTML="* Enter a valid Email-id .";
				check=0;
				return false;
			}
			
			if( uname == ""){
				document.getElementById('unameerr').innerHTML="* Please fill in your username";
				check=0;
				return false;
			}
			
			
			
			if((uname.length<2) ||(uname.length>20)){
				document.getElementById('unameerr').innerHTML="* length of username should be b/w 2-20 characters";
				check=0;
				return false;
			}
			
			if(!isNaN(uname)){
				
				document.getElementById('unameerr').innerHTML="* username cannot have numbers or special symbols";
				check=0;
				return false;
			}
			
			
			
			
			if( pass == ""){
				document.getElementById('passerr').innerHTML="* Please fill in your password";
				check=0;
				return false;
			}
			
			if((pass.length<6) ||(uname.length>20)){
				document.getElementById('passerr').innerHTML="* length of username should be b/w 6-20 characters";
				check=0;
				return false;
			}
			
			if(check==1){
			   $.post('send_signup_data.php',{postemail:email,postuname:uname,postpass:pass},
					 
					function(data) {
				   
			         if(data!="failure"){
						
						 alert("registered successfully");
					 }else{
						 
						 alert("registered successfully");
					 }
			   
			   });
			   
			  window.location.replace("main_page.php");	
		    }
			
			if(check==0){
				alert("registration unsuccessfull");
				
			}
		}	
		
		</script>
			  </form>  
      </div>
		
    </div>
  </div>
</div>
	  
	  
	  <!--end of sign-up module-->
	  
	  <!--carasoul-->
	  
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="3000" style="margin-top:-30px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" data-interval="3000" >
    <div class="carousel-item active" style="height: 400px; ">
      <img src="villian.jpg" class="d-block w-100" alt="..."  style="height: 400px;" >
    </div>
    <div class="carousel-item" style="height: 400px; ">
      <img src="druva.jpg" class="d-block w-100" alt="..."   style="height: 400px;" >
    </div>
    <div class="carousel-item" style="height: 400px;">
      <img src="drishyam_sub.jpg" class="d-block w-100" alt="..."   style="height: 400px;" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	  
<!-- Movie images -->	
   <div class="row">
  <div class="column" >
    <a href="Dhruva.php"><img src="druva_sub.jpg" width="600px" height="350px" style="margin-left: 40px;" id="DHRUVA" name="d"></a>
    <p style="margin-left:200px;" ><b>DHRUVA : UA|TELUGU</b></p>
  </div>
  <div class="column">
      <a href="Bahubali-2.php"><img src="bahubali_sub.jpg" width="650px" height="350px" id="BAHUBALI" name="b"></a>
    <p style="margin-left:200px;" ><b>BAHUBALI2 : UA|TELUGU</b></p>
  </div>
</div>
	  
<div class="row">
  <div class="column" >
      <a href="URI.php"><img src="uri_sub.jpg" width="600px" height="350px" style="margin-left: 40px;" id="URI" name="u"></a>
    <p style="margin-left:200px;" ><b>URI : UA|HINDI</b></p>
  </div>
  <div class="column">
      <a href="kgf.php"><img src="kgf_sub.jpg" width="650px" height="350px" id="KGF" name="k"></a>
    <p style="margin-left:200px;" ><b>KGF : UA|KANNADA</b></p>
  </div>
</div>
	  
	  <script>
	     $("#URI").click(function(){
		
			 var mcode = jQuery(this).attr("name");
			 var mname =jQuery(this).attr("id");
			
			$.post('process_data.php',{postcode:mcode,postname:mname},
			function(data){
				if(data){
					//alert(data);
					
					window.location.href="URI.php";
				}
			
			});
		 
		});
		  
		$("#DHRUVA").click(function(){
		
			 var mcode = jQuery(this).attr("name");
			 var mname =jQuery(this).attr("id");
			
			$.post('process_data.php',{postcode:mcode,postname:mname},
			function(data){
				if(data){
					//alert(data);
					
					window.location.href="Dhruva.php";
				}
			
			});
		 
		});
		  
		  
		 $("#KGF").click(function(){
		
			 var mcode = jQuery(this).attr("name");
			 var mname =jQuery(this).attr("id");
			
			$.post('process_data.php',{postcode:mcode,postname:mname},
			function(data){
				if(data){
					//alert(data);
					
					window.location.href="kgf.php";
				}
			
			});
		 
		}); 
		 
		$("#BAHUBALI").click(function(){
		
			 var mcode = jQuery(this).attr("name");
			 var mname =jQuery(this).attr("id");
			
			$.post('process_data.php',{postcode:mcode,postname:mname},
			function(data){
				if(data){
					//alert(data);
					
					window.location.href="Bahubali-2.php";
				}
			
			});
		 
		});  
		  
	  </script>
	  
  </body>
</html>
