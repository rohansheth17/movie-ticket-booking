<?php
	require 'db_conn.php';
	require 'template.php';
	
	if(isset($_POST["fname"]))
	{	
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$email=$_POST["email_id"];
		$phone=$_POST["phone"];
		$pass=$_POST["pass"];
		
		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($pass))
		{// storing data in user table
			
			$sql = "INSERT INTO user (fname, lname, phone, email, pass)
					VALUES ('$fname', '$lname' , '$phone', '$email', '$pass')";

			if (mysqli_query($conn, $sql)) 
				echo "<span style='font: italic bold 24px Georgia, serif;color:black;'>You have successfully signed up!></span>";
			else 
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		else echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'>Please fill all the fields<br></span>";
	}
?>
<html>
<body>

	<div class="transbox">
	<div class="jumbotron" style="background-color:blue">
			<h1>Sign Up</h1>
				<p>To review movies!</p>
	</div>

	<div class="container" style="align:center;">
					<span style='font: 24px Georgia, serif;color:black;'><form action=""  method="post" autocomplete="on">
					
					<div class="form-group">
							First name :<input type="text" name="fname" autofocus ><br>
					</div>
					<div class="form-group">
							Last name : <input type="text" name="lname"><br>
					</div>		
					<div class="form-group">
							email id: <input type="email"  class="form-control" name="email_id" placeholder="Enter email"><br>
					</div>
					<div class="form-group">
							mobile no. :<input type="number" min="1000000000" max="9999999999" name="phone" placeholder="Ex: 9820960560"><br>
					</div>
					<div class="form-group">					
							Set password :<input type="password" class="form-control" placeholder="Enter password" name="pass"><br><br>
					</div></span>		
					<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><button type="submit" value="Submit" class="btn btn-default"> Submit</button></span>
					</form>
					
					
	</div>
</div>	
	
<body>
<html>