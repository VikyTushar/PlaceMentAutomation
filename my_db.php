<?php 
		$username = "root";
		$password = "";
		$database = "stud_db";
		$server = "127.0.0.1";
		$con=mysqli_connect("$server","$username","$password","$database");
		if (mysqli_connect_errno())
		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}	
?>
