<?php
$name=$_GET['name'];
include("stud_db.php");
$sql = "SELECT status FROM stud_data WHERE fname ='$name'";
	$result=mysqli_query($con,$sql);
	if (!$result)
	{
		die('Error: ' . mysqli_error($con));
	}
	else
	{
		$row = mysqli_fetch_row($result);
		$status=$row[0];
		echo $status;
		if($status=='Not Placed')
		{
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `status` = 'Placed' WHERE `stud_data`.`fname` = '$name'");
		}
		if($status=='Placed')
		{
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `status` = 'Not Placed' WHERE `stud_data`.`fname` = '$name'");
		}
	}
	mysqli_close($con);
	header("location: adminpg3.php");
?>
