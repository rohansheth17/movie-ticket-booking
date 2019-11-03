<?php 

	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'movieticketbooking';
	$conn=mysqli_connect($host, $username, $pass, $db);
	if(!$conn )
		die('could not connect to database');
		

?>