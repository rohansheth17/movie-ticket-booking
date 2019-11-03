<!DOCTYPE html>
<html lang="en">

  <head>
  
				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
				
				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
  body { 
  background: url(theatr.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
} 

div.abc {
    width: 160px;
    height: 145px;
    background-image: url("download.jpg");
    position: relative;
    -webkit-animation: mymove 8s infinite; /* Chrome, Safari, Opera */
    animation: mymove 8s infinite;
}
  
    body { 
  
  background-color: yellow;
}

@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 2000px;}
}

@keyframes mymove {
    from {left: 0px;}
    to {left: 2000px;}
}
    
  #section {padding-top:200px;}
   </style>
 
 			  
   <meta charset="utf-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  
  <body data-spy="scroll" data-target=".navbar">

				
				
				<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
						
						 <div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
							    </button>
								<a class="navbar-brand" href="#"><img src="download.jpg" class="img-responsive" style="width:80px;height:50px;"></img>Book My Tickets</a>
							</div>
							<div>
							  <div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav">
								  <li><a href="#section">Upcoming Trailers</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
								   <li class="dropdown">
										  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
										  <ul class="dropdown-menu">
											<li><a href="login.php"><span class="glyphicon glyphicon-log-in">Sign-in</a></li>
											<li><a href="signup.php"><span class="glyphicon glyphicon-user">Sign up</a></li>
										  </ul>
									</li>
									 <li class="active"><a href="aboutus.php">About Us</a></li>
									 <br><br><br><br>
								</ul>
								 
							  </div>	  
						    </div>
						
							<!-- <ul class="nav navbar-nav" style="float:right;">
							 <ul class="nav navbar-nav" style="float:right;">
									<li class="dropdown">
												<a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
												<span class="caret"></span></a>
												<ul class="dropdown-menu">
														<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Sign-in</a></li>
														<li><a href="signup.php"><span class="glyphicon glyphicon-user">Signup</a></li>
												</ul>
										 </li>
										 <li class="active"><a href="aboutus.php">About Us</a></li>
							</ul>		
							-->
						
					    </div>
													
						
					<div class="dropdown" style="float:left;margin-left:25%">
								<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="padding-right:25px">Search By Movie or Theatre
								<span class="glyphicon glyphicon-search"></span></button>
								<ul class="dropdown-menu">
								  <li><a href="searchmovie.php">Movie</a></li>
								  <li><a href="searchtheatre.php">Theatre</a></li>
								<!--  <li><a href="#">By Time</a></li>-->
								</ul>
							</div>  
					</div> 
						
										
																	
					</nav>
					<br><br><br><br><br><br><br><br><br><br><br><br><br>
		
											
						<div class="container">
							  <br>
							  <div id="myCarousel" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
								  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								  <li data-target="#myCarousel" data-slide-to="1"></li>
								  <li data-target="#myCarousel" data-slide-to="2"></li>
								  <li data-target="#myCarousel" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">

								  <div class="item active" style="width:325px;height=226px">
									<img src="Fan.jpg"  alt="Fan poster" width="425" height="322">
									<div class="carousel-caption">
									  <h3>FAN</h3>
										<form action="movie.php" method="POST">		  
										 <input type="hidden" name="source" value="Fan.jpg">
										 <input type="submit" value="view" style="background: transparent;border:none;">
										</form>
									</div>
								  </div>
								  
								  <div class="item" style="width:325px;height=226px">
									<img src="flyingjatt.jpg" alt="A Flying Jatt poster" width="425" height="322">
									<div class="carousel-caption"
									  <h3>A FLYING JATT</h3>
										<form action="movie.php" method="POST">		  
										 <input type="hidden" name="source" value="flyingjatt.jpg">
										 <input type="submit" value="view" style="background: transparent;border:none;">
										</form>
									</div>
								  </div>
								
								  <div class="item" style="width:325px;height=226px">
									<img src="Raazreboot.jpg" alt="Raaz Reboot poster" width="425" height="322">
									<div class="carousel-caption"
									  <h3>Raaz Reboot</h3>
									   <form action="movie.php" method="POST">
									  <input type="hidden" name="source" value=".jpg">
									 <input type="submit" value="view" style="background: transparent;border:none;"></form>
									</div>
								  </div>

								  <div class="item" style="width:325px;height=226px">
									<img src="Sully.jpg" alt="Sully poster" width="425" height="322">
									<div class="carousel-caption">
									  <h3>Sully</h3>
									   <form action="movie.php" method="POST">
									  <input type="hidden" name="source" value=".jpg">
									 <input type="submit" style="background: transparent;border:none;" ></form>
									</div>
								  </div>
							  
								</div>

								<!-- Left and right controls -->
								<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								  <span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								  <span class="sr-only">Next</span>
								</a>
							  </div>
							</div>
				
				
				<br><br><br>
				
										
				<div class="container-fluid">
									<h1 style="color:red">BOOK MY TICKETS<small>-The ultimate ticket booking experience.</small></h1>
									<h2><mark>LOGIN</mark><span style="color:yellow;" to review movies! Enjoy!</h2> 
				</div>
				
		<!--		<div class="container">
					  <blockquote style="background-color:gold">
						<p class="flow-text">You never win the silver,you only lose the gold.</p>
						<footer>SRK</footer>
					  </blockquote>
				</div>  -->
				
				<div class="container">
					 
					  <img src="Baarbaardekho.jpg" style="float:left" class="img-circle" alt="Cinque Terre" width="304" height="236">
					   <form action="movie.php" method="POST">		  
										 <input type="hidden" name="source" value="Baarbaardekho.jpg">
										 <input type="submit" value="BOOK NOW!" style="border:1px;">
						</form>
					</div>
									
										
					<br><br><br>
					
				<div class="abc">
				
			<!--		  <img class="img-responsive;img-rounded" style="float:right;" src="http://blog.sitaphal.com/wp-content/uploads/2015/12/Top-10-Indias-Best-Online-Movie-Ticket-Booking-Websites-730x410.png" alt="MTB" width="160" height="145">   -->
				</div>	
				
					
				<br><br><br>
									
										
					<div id="section" class="container-fluid">
					  <h2>Upcoming Movie Trailers:</h2>
					  <div class="embed-responsive embed-responsive-4by3">
					<iframe width="100" height="200" src="https://www.youtube.com/embed/poLjq0u4_5A" frameborder="0" allowfullscreen></iframe>
					  </div>
					</div>    
						
		
							
									
					
				<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
				<!-- Latest compiled and minified JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				 integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
  
  </body>

</html>