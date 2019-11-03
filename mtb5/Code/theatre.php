<?php
require 'db_conn.php';
require 'template.php';

$imgfile=$_POST['source'];
?>

<html>
<body>

<img src="<?php echo $imgfile; ?>"/>
</body>
</html

<?php	

		$sql = "SELECT image,theatre_id, name, address, phone FROM theatre WHERE image ='$imgfile'";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{					
			 echo "<span style='font: italic bold 34px Georgia, serif;color:black;'><br><br>Name: ". $row["name"]. "<br>address: " . $row["address"].
					"<br>phone: ".$row["phone"]."</span>";
				
				$theatre_id=$row["theatre_id"];
				$sql2="SELECT name, movie_id FROM movie NATURAL JOIN theatre_movie WHERE theatre_id='$theatre_id'";		
				$result2= mysqli_query($conn, $sql2);
					
				if (mysqli_num_rows($result2) > 0)
				{	
					echo "<span style='font: bold 34px Verdana, Geneva, sans-serif;color:red;'><br>Movies playing at ".$row["name"]." are:"."</span>";
					while($row2 = mysqli_fetch_assoc($result2))
					{	
						$theatre=$row["theatre_id"];
						$movie = $row2["movie_id"];
						echo "<span style='font: italic bold 34px Georgia, serif;color:black;'><br>".$row2["name"];	
						
						echo "<form action='timing.php' method='post'>";
						echo "<input type='hidden' name='movie' value='$movie'>";
						echo "<input type='hidden' name='theatre' value='$theatre'>";
						echo "<input type='submit' value='go'>";
						echo "</form>"."</span>";
					}	
				}	
				else echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><br>0 movies playing</span>";
				
			}


?>
