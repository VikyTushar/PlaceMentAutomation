<?php
include("stud_db.php");

{
	$user_name = $_GET['username'];
	$sql = "SELECT id FROM stud_record WHERE user_name ='$user_name'";
		$result=mysqli_query($con,$sql);
		if (!$result)
		{
  			die('Error: ' . mysqli_error($con));
		}
		else
		{
			$row = mysqli_fetch_row($result);
			$id=$row[0];
			mysqli_query ($con,"DELETE FROM stud_data WHERE uid='$id'");
			mysqli_query($con,"DELETE FROM stud_record WHERE user_name='$user_name'");
			header("location: adminpg2.php");
		}
}
mysqli_close($con);

?>