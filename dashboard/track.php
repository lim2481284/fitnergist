<?php 
	
	include("assets/php/mysql_connect.inc.php"); 		
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Fitnergist</title>
		
		<!--meta list-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<!--css for all page -->
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>	
		<link href="assets/css/font-awesome.css" rel="stylesheet"> 
		<link href="assets/css/responsive/style.css" rel="stylesheet" type="text/css" media="all"/>	
		<link href="assets/css/main.css" rel="stylesheet" type="text/css" media="all"/>	
		
		
		<!--css for this page -->		
		<link href="assets/css/page-css/tracker.css" rel="stylesheet" type="text/css" media="all"/>	
		
	</head>
	<body>	
		<div class="page-container sidebar-collapsed">	
		   <div class="left-content">
			   <div class="mother-grid-inner">			   
					<!--header-->
					<section class='header'></section>
					
					<!--body content-->
					<div class="inner-block">
						<form action ='#' method='post'>
						<div class='col-sm-12 '>
							<center>
							<select class='userList' name='user'>
								<option disabled selected> Please select user </option>
							</select>
							</center>
						</div>
						<div class='col-sm-12 inputRow'>
							<div class='col-sm-4'>
								<div class='circle'>
									<input class='circleInput weight'  name='weight' type='number' value='0' min="1" max="500" placeholder="_"/>	
									
								</div>
								<p> Weight </p>
							</div>
							<div class='col-sm-4'>
								<div class='circle'>
									<input class='circleInput' type='number' value='0' min="0" max="500" placeholder="_"/>	
								</div>
								<p> Body Fat  </p>
							</div>
							<div class='col-sm-4'>
								<div class='circle'>
									<input class='circleInput' type='number' value='0' min="0" max="500" placeholder="_"/>	
								</div>
								<p> Water  </p>
							</div>
						</div>
						
						<div class='col-sm-12 inputRow'>
							<div class='col-sm-4'>
								<div class='circle'>
									<input class='circleInput' type='number' value='0' min="0" max="500" placeholder="_"/>	
								</div>
								<p> Visceral Fat  </p>
							</div>
							<div class='col-sm-4'>
								<div class='circle'>
									<input class='circleInput' type='number' value='0' min="0" max="500" placeholder="_"/>	
								</div>
								<p> BMR </p>
							</div>
							<div class='col-sm-4'>
								<div class='circle'>
									<input class='circleInput' type='number' value='0' min="0" max="500" placeholder="_"/>	
								</div>
								<p> PR </p>
							</div>
						</div>
						<div class='col-sm-12 inputRow'>
							<center>
							<button class='btn btn-default' name='trackUser' >Track</button>
							</center>
						</div>
						</form>
					</div>
					
				</div>
			</div>
			<!--side menu-->
			<section class='menu'></section>			
			<div class="clearfix"> </div>
			
		</div>

		<!--script for all page -->
		<script src="assets/js/jquery-2.1.1.min.js"></script> 
		<script src="assets/js/bootstrap.js"> </script>
		<script src="assets/js/jquery.nicescroll.js"></script>
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/main.js"></script>
		
		<!--script for this page -->
		<script src="assets/js/page-js/track.js"></script>
		<?php 			
			include("assets/php/track_function.php"); 		
		?>	
		

	</body>
	
</html>                     