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
		<link href="assets/css/page-css/forum.css" rel="stylesheet" type="text/css" media="all"/>	
		<link href="assets/css/responsive/forum.css" rel="stylesheet" type="text/css" media="all"/>	
		
	</head>
	<body>	
		<div class="page-container sidebar-collapsed">	
		   <div class="left-content">
			   <div class="mother-grid-inner">			   
					<!--header-->
					<section class='header'></section>
					
					<!--body content-->
					<div class="inner-block">
						
						<div class='col-sm-2'></div>
						<div class='forumSection col-sm-8'> 			
							<a href='#create'><button class='createBtn'>Create Forum</button></a>
							<br><br><br>							
							<div style='header' class='tableHeader'>
								<label class='tableHeaderLabel_1'> Forum</label>
								<label class='tableHeaderLabel_2'> Date</label>
								<label class='tableHeaderLabel_2'> Comment</label>
							</div>				
							<div  class='tableBody' id="all_text">
								<div class='forumItem' >
									<div class='forumHead'> 
										<b>Username</b><br>
										<label class='pageContent'> Title </label>
									</div>
									<div class='forumTail'>
										1997.1.20
									</div>								
									<div class='forumTail'>
										3
									</div>														
									<button class='deleteBtn' value='$postId' name ='deletePost'> x </button>
								</div>
								
								<div class='forumItem' id='$postId'>
									<div class='forumHead'> 
										<b>Username</b><br>
										<label class='pageContent'> Title </label>
									</div>
									<div class='forumTail'>
										1997.1.20
									</div>								
									<div class='forumTail'>
										3
									</div>														
									<button class='deleteBtn' value='$postId' name ='deletePost'> x </button>
								</div>
								<div class='forumItem' id='$postId'>
									<div class='forumHead'> 
										<b>Username</b><br>
										<label class='pageContent'> Title </label>
									</div>
									<div class='forumTail'>
										1997.1.20
									</div>								
									<div class='forumTail'>
										3
									</div>														
									<button class='deleteBtn' value='$postId' name ='deletePost'> x </button>
								</div>				
							</div>
							
							<!-- Popup box -->
							<div id='create' class='overlay'>
									<div class='popupBox'>
										<h2>Create Forum</h2>
										<a class='close' href='#'>&times;</a>
										<textarea class='textarea' name="content" placeholder="Write something ..." required></textarea>	
										<br><br><button class='postBtn' type="submit" name="post" >Post</button>								
									</div>
							</div>		
							
						</div>
						<div class='col-sm-2'></div>						
						
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

	</body>
	
</html>                     