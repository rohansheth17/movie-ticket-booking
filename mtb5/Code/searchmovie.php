<?php
require 'db_conn.php';
require 'template.php';
?>	

<html>
<head>
<style>
input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus {
    border-color:#333;
}

input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}

</style>

</head>
<body>

	<form action="" method="post">
	<span style='font: bold 24px Georgia, serif;color:red;'>Search movie :</span><input type="text" name="movie"> <br>
	<input type="submit" value="Submit">	
		
	</form>
</body>
</html>

<?php
if(isset($_POST["movie"]) )
{	
	$movie=$_POST["movie"];
		
	if(!empty($movie) )
	{
		$movie.='%';
		$sql = "SELECT image,movie_id, name, genre, synopsis, formats FROM movie WHERE name like '$movie'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
			
			while($row = mysqli_fetch_assoc($result))
			{		
	          
				$img=$row["image"];
				echo "<span style='font: italic bold 34px Georgia, serif;color:black;'><br>".$row["name"];	
				echo "<form action='movie.php' method='post'>";
				echo "<input type='hidden' name='source' value='$img'> ";
			    echo "<input type='submit' value='go'>";
			    echo "</form></span>";
				
			/*	echo "<br><br>Name: ".$row["name"]."<br>genre: ".$row["genre"].
					"<br>synopsis: ".$row["synopsis"]."<br>formats: ".$row["formats"];
						
				$movie_id=$row["movie_id"];
				$sql2="SELECT name, address FROM theatre NATURAL JOIN theatre_movie WHERE movie_id='$movie_id'";		
				$result2= mysqli_query($conn, $sql2);
					
				if (mysqli_num_rows($result2) > 0)
				{	
					echo '<br>Theatres playing it are: ';
					while($row2 = mysqli_fetch_assoc($result2))	
						echo "<br>".$row2["name"].",".$row2["address"];	
				}	
				else echo "<br>0 theatres are playing it";	
			*/	
			}		
		}
		else echo "<span style='font: italic bold 24px Verdana, Geneva, sans-serif;color:black;'>0 movies</span>";
	}
}
?>