<html>
<head><title>Pay</title>
    <meta charset="UTF-8">
    <title>QR Codes</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="main.css">
    <script src="qrcode.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cardo|Signika|Allerta Stencil" rel="stylesheet"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Cardo|Signika|Allerta Stencil" rel="stylesheet">
<style type="text/css">
    .shadow-lg{
        font-family: 'Signika';
        width: 75%;
        height: 6in;
        background-color: #D1CACA;
    }
    p{
        margin: 0em;
    }
    .T{
        float: left;
        width:200px;
        height:100px;
    }
	
	#design{
		margin-right: 100px;
	}
    div.QR{
        position: relative;
        padding-left: 10px;
        padding-top: 20px;
    }
</style>
</head>
<body>
    <center>
    <br />
    <br />
    <br />
    <br />
    <div class="shadow-lg p-2 mb-4 bg-white rounded">TICKET
        <hr>
        <div>
        <img class="T" src="Ticket.png">
        </div>
        <p style="font-family:'Cardo';text-align: middle;font-weight:bold;"><span><?php session_start(); echo $_SESSION['moviename']; ?></span></p>
        <p style="font-family:'Signika';color: #D1CACA; text-align: middle; font-size: 14pt;margin-bottom: =-30px"><span><?php echo "RS ".$_SESSION['amount']; ?></span></p>
        <p style="font-family:'Signika';font-style: bold; text-align: middle; font-size: 14pt"><span><?php echo $_SESSION['fullday']; ?></span>	</p>
        <p style="font-family:'Comic Sans MS';text-align: middle"><span><?php echo $_SESSION['theatre']; ?></span></p>
        <hr>
        <p style="font-size:20pt;text-align:left;position:relative;left:20px;">
			<?php echo $_SESSION['total_seats'] ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <span id="design"><?php  foreach($_SESSION['seats'] as $key) echo $key."  "; ?></span>
        </p>
        <p style="font-size:20pt;text-align:left;">
        Tickets
        </p>
        <hr>
		<p style="font-family:'Cardo';text-align: middle;font-weight:bold;">Email :<?php echo $_SESSION["email"];?></p>
        <a href="Demo.php">Click here to receieve an email confirmation</a>
        <main>
        <div class="QR" id="output"></div>
        </main>
    </div>
    </center> 
      <script type="text/javascript">
        function randomg(){
          var text="";
          var possible="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
          for(var i=0;i<7;i++)
              text+=possible.charAt(Math.floor(Math.random()*possible.length));
          return text;       
        }
        var numb=randomg();
        let qrcode = new QRCode("output", {
            text: numb,
            width: 150,
            height: 150,
            colorDark : "#003366",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
          //document.write("<h3>Transaction id</h3>"+numb);
    </script>
</body>
</html>