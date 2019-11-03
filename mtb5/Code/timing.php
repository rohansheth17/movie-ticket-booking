<?php
require 'db_conn.php';
require 'template.php';

session_start();
$_SESSION["movie"]=$movie=$_POST["movie"];
$_SESSION["theatre"]=$theatre=$_POST["theatre"];

?>


<?php 
		$sql="SELECT time FROM theatre_movie WHERE movie_id='$movie' && theatre_id='$theatre'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) 
		{
			echo "<span style='font: italic bold 34px Georgia, serif;color:black;'>Select show timing<br>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<form action='seats_interface.php' method='POST'>";
				if($row["time"]==1)
				{
				
					echo '<input type="radio" name="timing" value="1" checked> 9am-12pm<br>';
					
				}
				else if($row["time"]==2)
				{
					
					echo '<input type="radio" name="timing" value="2" checked> 1pm-4pm<br>';
					
				}
				else
				{
	
					echo '<input type="radio" name="timing" value="3" checked> 5pm-8pm<br>';
				}
				//echo "<input type='number' name='seats' min='1' max='25'>";
				echo "<input type='submit' value='Go'>";
				echo "</form></span>";
			}	
		}	
			 /*echo "<br><br>Name: ". $row["name"]. "<br>address: " . $row["address"].
					"<br>phone ".$row["phone"];
				
				$theatre_id=$row["theatre_id"];
				$sql2="SELECT name FROM movie NATURAL JOIN theatre_movie WHERE theatre_id='$theatre_id'";		
				$result2= mysqli_query($conn, $sql2);
					
				if (mysqli_num_rows($result2) > 0)
				{	
					echo '<br>Movies playing at '.$row["name"].' are:';
					while($row2 = mysqli_fetch_assoc($result2))
					{	
						$movie = $row2["name"];
						echo "<br>".$row2["name"];	
						echo "<form>";
						echo "<form action='theatre.php' method='post'>";
						echo "<input type='submit' name='Book' value='$movie'>";
						echo "</form>";
					}	
				}	
				else echo "<br>0 movies playing";
			*/	
?>

<!DOCTYPE html>
<html>
<body>


</body>
</html>