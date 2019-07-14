<html>
<head> 
<title> Bahubali-2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cardo|Signika|Allerta Stencil" rel="stylesheet">
	
	
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"> </script>
	
	
	
    <style>
        
        .jumbotron-fluid{
     background-color:#003366; 
     height: 200px;
    }
    
        .A {
            display: inline-block;
            font-family: 'Signika',sans-serif;
        }
        
        .pagination >li a{
            min-width: 5em;
            min-height: 3em;        }
		
		.pagination >li{
			min-width: 8em;
            min-height: 3em;
			border:1px solid #b2beb5;
			padding-left:10px;
			padding-top:12px;
			color:#0000ff;
		}
    
        .logo{
        width: 250px;
        height: 200px;
        position: relative;
        left: 1000px;
        top: -190px;
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

<frame>
<div>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="active" class="page-item" id="mon" name="MONDAY,4 Feb"><a class="page-link" href="#">Mon,4 Feb</a></li>
    <li class="page-item" id="tue" name="TUESDAY,5 Feb"><a class="page-link" href="#">Tue,5 Feb</a></li>
    <li class="page-item" id="wed" name="WEDNESDAY,6 Feb"><a class="page-link" href="#">Wed,6 Feb</a></li>
  </ul>
</nav>    
</div>
    
<div class="A">
<p>PVR:Orion,Rajajinagar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!--<button type="button" class="btn btn-info">10:20</button>  &nbsp; &nbsp; &nbsp; -->
<button type="button" class="btn btn-info" id="o1100" name="Orion,11:00">11:00</button> &nbsp; &nbsp; &nbsp; &nbsp;
<button type="button" class="btn btn-info" id="o1200" name="Orion,1:20">1:20</button>  &nbsp;  &nbsp; &nbsp; &nbsp;
<button type="button" class="btn btn-info" id="o7200" name="Orion,7:20">7:20</button>  &nbsp; &nbsp; &nbsp; &nbsp;
</p>
</div>
    <hr>
    
<div class="A">
<p>PVR:Vaishnavi Saphire, Yeshwantpur &nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-info" id="v1020" name="Vaishnavi Saphire,10:20">10:20</button> &nbsp; &nbsp; &nbsp; &nbsp;
<button type="button" class="btn btn-info" id="v1100" name=" Vaishnavi Saphire,11:00">11:00</button> &nbsp; &nbsp; &nbsp; &nbsp;
<button type="button" class="btn btn-info" id="v1200" name="Vaishnavi Saphire,11:20">1:20</button>  &nbsp;  &nbsp; &nbsp; &nbsp;
</p>
</div>
    <hr>
	
	<script type="text/javascript">
	  var date_now = new Date();
	  var month = new Array();
	  month[0]="Jan";
	  month[1]="Feb";
	  month[2]="Mar";
	  month[3]="Apr";
	  month[4]="May";
	  month[5]="Jun";
	  month[6]="Jul";
	  month[7]="Aug";
	  month[8]="Sep";
	  month[9]="Oct";
	  month[10]="Nov";
	  month[11]="Dec";
	  var day = new Array();
	  day[0]="MONDAY";
	  day[1]="TUESDAY";
	  day[2]="WEDNESDAY";
	  day[3]="THURSDAY";
	  day[4]="FRIDAY";
	  day[5]="SATURDAY";
	  day[6]="SUNDAY";	
	  var n =month[date_now.getMonth()];
	  var today=date_now.getDate();
	  var trrw =date_now.getDate() +1;	
	  var over = date_now.getDate()+2;
	  var today_name =day[date_now.getDay()-1]+","+today+ " "+n;
	  var tmrrw_name =day[date_now.getDay()]+","+trrw+ " "+n;
	  var dayafter_name = day[date_now.getDay()+1]+","+over+ " "+n;	
document.getElementById("mon").innerHTML="Today,"+today+" "+month[date_now.getMonth()];
document.getElementById("tue").innerHTML="Tmrrw,"+trrw+" "+month[date_now.getMonth()];
document.getElementById("wed").innerHTML="Dayafter,"+over+" "+month[date_now.getMonth()];	


$("#mon").attr('name',today_name);
$("#tue").attr('name',tmrrw_name);
$("#wed").attr('name',dayafter_name);		
	</script>	
    
    
<div class="A">
<p>Inox: Mantri Square,Malleshwaram &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-info" id="m1020" name="Mantri square,10:20">10:20</button> &nbsp; &nbsp; &nbsp; &nbsp;
<button type="button" class="btn btn-info" id="m1100" name="Mantri square,11:00">11:00</button> &nbsp; &nbsp; &nbsp; &nbsp;
<button type="button" class="btn btn-info" id="m1200" name="Mantri square,1:20">1:20</button>  &nbsp;  &nbsp; &nbsp; &nbsp;
</p>
</div>
    <hr>
	
	<script>
		
   var keep_check="mon";
        $("li").click(function(){
	     
	    var day = jQuery(this).attr('id');
            keep_check=day;
	     var full_day = jQuery(this).attr('name');
	     $.post("process_day.php",{postday:day,postfullday:full_day},
			   function(data){
			 alert(data);
		 });
	   
	   
   });
        
		
   $("button").click(function(){
       //alert(keep_check);
       
       if(keep_check=="mon" && day=="mon"){
           //alert(day);
           
           var alert_time_srting=event.target.innerHTML;
var alert_time_array = alert_time_srting.split(':');
if(alert_time_array[0]==1||alert_time_array[0]==7)
       alert_time_array[0]+=12;
 var calculate = Number(alert_time_array[0]*60) +Number(alert_time_array[1]);
  var date=new Date(); 
 var hours_now=date.getHours();
 var min_now=date.getMinutes();
 var time_now= hours_now*60 + min_now;
//  alert(time_now);
   // alert(calculate);
 if(time_now>calculate){
alert('Not allowed to book ticket!');
return;
       }
	   
}  
        var tid = jQuery(this).attr('id');
	  var name =jQuery(this).attr('name'); 
	  $.post("process_time_data.php",{postid:tid,postname:name},
      function(data){ 
		window.location.href="Theatre.php";  
	  }); 
   });
       
       
       
       
	 
		
		var day="mon";
		var full_day=today_name;
		 $.post("process_day.php",{postday:day,postfullday:full_day},
			   function(data){
			 alert(data);
		 });	
		
		
	   
	</script>		
	
</body>
</html>	
    
