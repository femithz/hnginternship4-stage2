<!DOCTYPE html>
<html>
<head>
	<title>Stage 1 Task</title>
	<style type="text/css">
		.body{
			padding: 0;
			margin-top: 95px;
			/*background-image:url("knownledge.jpg");*/
		}
		.header{
			font-size: 35px;
			font-weight: 200px;
			font-family: ;
			font: bold 150% Arial, Helvetica, sans-serif; color:#ffffff;margin:0;padding:0;
		}
		.text{
			font-size: 35px;
			font-weight: 200px;
			font-family: ;
			font: bold 150% italic, Helvetica, sans-serif; color:#ffffff;margin:0;padding:0;
		}
	</style>
</head>
<body class="body" style="background-color:hsl(0, 100%, 30%);">
<div style="text-align: center;">
	<h3 class="header">
		HNGINTERNSHIP 4.0
	</h3>
	<br>
	<P class="header"><?php echo date("Y");?></P>
</div>
<div style="text-align: center;" class="text">
	 <?php

	        echo "<br>";  
			echo "Today is " . date("Y/m/d") . "<br>", "<br>";
			echo "The time is " . date("h:i:sa");
     ?> 
     <br><br>
     <small>Stage 1 Task</small>
</div>
</body>
</html>