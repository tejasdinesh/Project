
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Cardo|Signika|Allerta Stencil" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"> </script>
    <style type="text/css">
    img{
        position: relative;
        top: -350px;
        left: -200px;
    }
    .jumbotron-fluid{
     background-color:#003366; 
     height: 200px;
    }
    #jumbo{
     border-style: none;
         text-align: left;
    }    
     .logo{
        width: 250px;
        height: 200px;
        position: relative;
        left: 1000px;
       top: -190px;
    }
        #Tick{
            width:250px;
            height:150px;
            position: absolute;
            top:240px;
            left:500px;
        }
        .p1{
            position:absolute;
            left:500px;
            top:400px;
        }
        .hr{
            position: absolute;
            top:550px;
        }
        .anchor{
            position: absolute;
            top:560px;
            left:500px;
        }
    </style>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <h1 class="display-4"style="font-family:'Allerta Stencil',sans-serif;"><font color="white">Rendezvous</font></h1>
      <p class="lead" style="font-family:'Cardo',sans-serif"><font color="white">Your one step booking application</font></p>
      <img class="logo" src="Logo1.png"/>
  </div>
  </div>
    
    <img id="Tick" src="Ticket1.png" alt="Tickets booked" />
    <p  class="p1" style="font-family:Signika; font-size:18pt;"> Tickets confirmed! <br/> Email Successfully sent!</p>
    <hr class="hr" />
    <a  class="anchor" style="font-family:Cardo"href="main_page.php">Click here to go to homepage</a>
</body>
</html>



<?php
$headers="MIME-Version: 1.0\r\n";
$headers .="Content-type: text/html; charset=ISO-8859-1\r\n";
$headers.= "Content-type: image/jpeg";
$message="";

session_start(); 
$name= $_SESSION['moviename'];
$day =$_SESSION['fullday'];
$theatre     =$_SESSION['theatre'];
$number=$_SESSION['total_seats'];
$emailto=$_SESSION['email'];
//$seats=$_SESSION['seats'];
$seat="";
foreach($_SESSION['seats'] as $key)
    $seat.=$key." ";
$sub="Mail from Rendezvous!";

/*$msg.='<html><body>';
//$msg.=;
$msg.='<table rules="all" style="border-color:#666" cell-padding="10">';
$msg.="<tr style='background: #eee; padding-right:30px'><td> <strong>Movie Name </strong></td><td>".$name."</td></tr>";

$msg.="</table>";
$msg.="</body></html>";*/


$message = '<html><body>';
//$message .= '<img src="https://www.google.com/search?q=ticket+images+clip+art&tbm=isch&source=iu&ictx=1&fir=AkJXfFJXB0EBKM%253A%252CfZyxGRbv2kEBKM%252C_&vet=1&usg=AI4_-kS6eKjTE8Dtki91DyDg7TVJ4OatPQ&sa=X&ved=2ahUKEwiFyKyf4uDhAhVS_XMBHTbmA5YQ9QEwA3oECAcQCg#imgrc=bk5w7KntvUULCM:&vet=1" alt="Cannot Display" />';
$message .='<img src="http://clipart-library.com/data_images/445262.jpg" alt="Cannot Display"/>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10;" width="100%;" border="1px;">';
$message .= "<tr style='background: #eee;'><td><strong> Movie Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td><strong>Day:</strong> </td><td>" . strip_tags($day) . "</td></tr>";
$message .= "<tr><td><strong>Theatre:</strong> </td><td>" . strip_tags($theatre) . "</td></tr>";
$message .= "<tr><td><strong>No of tickets:</strong> </td><td>" . strip_tags($number) . "</td></tr>";
$message .= "<tr><td><strong>Seat Number:</strong> </td><td>" . strip_tags($seat) . "</td></tr>";
/*$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";
$addURLS = $_POST['addURLS'];
if (($addURLS) != '') {
    $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
}
$curText = htmlentities($_POST['curText']);           
if (($curText) != '') {
    $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
}
$message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";*/
$message .= "</table>";
$message .= "</body></html>";





/*$msg.=" 
       Movie Name:$name
       Day:$day
       Theatre:$theatre
       No of tickets:$number
       Seat Numbers:$seat
"; */    

$rec=$emailto;

mail($rec,$sub,$message,$headers);
//echo "<h1>Mail successfully sent!</h1>"
?>


