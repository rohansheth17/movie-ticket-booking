<?php
require 'db_conn.php';
require 'template.php';

$imgfile=$_POST['source'];

?>

<html>
<body>

<img src="<?php echo $imgfile; ?>" style="height:450px;width:450px;"/>
</body>
</html>


<?php	
		$sql = "SELECT movie_id, name, genre, synopsis, formats, lang FROM movie WHERE image='$imgfile' ";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result))
		{					
				echo "<span style='font: italic bold 34px Georgia, serif;color:black;'><br><br>Name: ".$row["name"]."<br>genre: ".$row["genre"].
					"<br>synopsis: ".$row["synopsis"]."<br>formats: ".$row["formats"]."<br>lang: ".$row["lang"]."</span>";
						
				$movie_id=$row["movie_id"];
				$sql2="SELECT name, address, phone, theatre_id FROM theatre NATURAL JOIN theatre_movie WHERE movie_id='$movie_id'";		
				$result2= mysqli_query($conn, $sql2);
					
				if (mysqli_num_rows($result2) > 0)
				{	
					echo "<br><span style='font: italic bold 34px Verdana, Geneva, sans-serif;color:red;'>Theatres playing it are: "."</span>";
					while($row2 = mysqli_fetch_assoc($result2))	
					{	
						$movie=$row["movie_id"];
						$theatre=$row2["theatre_id"];
						echo "<span style='font: italic bold 34px Georgia, serif;color:black;'><br>".$row2["name"].",".$row2["address"].",".$row2["phone"];	
						echo "<form action='timing.php' method='post'>";
						echo "<input type='hidden' name='movie' value='$movie'>";
						echo "<input type='hidden' name='theatre' value='$theatre'></span>";
						echo "<input type='submit'  value='Go'>";
						echo "</form></span>";
					}	
				}	
				else echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><br>0 theatres are playing it</span>";	
		}		


?>
