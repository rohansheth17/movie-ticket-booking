
<?php
	require 'db_conn.php';
	require 'template.php';
	
	session_start();
	
?>	


<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   
    <!-- Bootstrap core CSS -->
    <link href="./Signin Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./Signin Template for Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Signin Template for Bootstrap_files/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Signin Template for Bootstrap_files/ie-emulation-modes-warning.js.download"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

	<div class="transbox">
    <div class="container">
	<span style='font: 21px Georgia, serif;color:black;'>
      <form class="form-signin" action=""  method="post" autocomplete="on">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email_id" placeholder="Email email address" required autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        <div class="checkbox"></span>
       <!--   <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label> -->
        </div>
        <span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Sign in</button></span>
      </form>

    </div> <!-- /container -->
</div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Signin Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>
  


<!--
	<div class="container" style="align:center;">
		<form action=""  method="post" autocomplete="on">
					
		<div class="form-group">
			email id: <input type="email"  class="form-control" name="email_id" placeholder="Enter email" required><br>
		<div>			
		<div class="form-group">					
			password :<input type="password" class="form-control" placeholder="Enter password" name="pass" required><br>
		</div>		
			<button type="submit" value="Submit" class="btn btn-default">Login</button><br><br>
		</form>	
	</div>	-->		
<body>
<html>

<?php 
	if(isset($_POST["email_id"]))
	{	
		$email=$_POST["email_id"];
		$pass=$_POST["pass"];

		$sql = "SELECT email,pass FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) != 0)
		{	$row = mysqli_fetch_assoc($result);
			if($pass==$row["pass"])
			{	
				$sql="UPDATE user SET logged = '1' WHERE email='$email'";
				mysqli_query($conn, $sql);
				echo "<span style='font: bold 34px Georgia, serif;color:black;'>You have successfully logged in!</span>";
			}
		}	
		else echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>This email is not registered.</span>";	
	}
?>
