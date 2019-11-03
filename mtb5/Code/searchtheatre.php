<?php
require 'db_conn.php';
require 'template.php';
?>
<html>
<body>

	<div style="align:center;">
	<form action="" method="post" >
	<span style='font: bold 24px Georgia, serif;color:red;'>Search theatre :</span><input type="text" name="theatre"> <br><br><br><br>
	<input type="submit" style='font: 14px Georgia, serif;color:darkblue;' value="Submit">
		
	</form>
	</div>
</body>
</html>

<?php 
if(isset($_POST["theatre"]) )
{	
	$theatre=$_POST["theatre"];	
	
	if(!empty($theatre) )
	{
		$theatre.='%';
		$sql="SELECT image,theatre_id, name, address, phone FROM theatre WHERE name like '$theatre'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$img=$row["image"];
				echo "<span style='font: italic bold 34px Georgia, serif;color:black;'><br>".$row["name"];	
				echo "<form action='theatre.php' method='post'>";
				echo "<input type='hidden' name='source' value='$img'> ";
			    echo "<input type='submit' value='Go'>";
			    echo "</form></span>";
				
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
				else echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;<br>0 movies playing</span>";
			*/	
			}
		}
		else echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'><br>0 theatres found<br></span>";
	}
}
?>