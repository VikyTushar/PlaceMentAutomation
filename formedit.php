<?php
$choice=$_GET['choice'];
$uid=$_GET['uid'];
//echo $choice;

include("stud_db.php");

{
	$SQL="SELECT * FROM `stud_data`";
	if (!mysqli_query($con,$SQL))
	{
  		die('Error: ' . mysqli_error($con));
	}
	else
	{
		if($choice==1)
		{
			$fname = mysqli_real_escape_string($con, $_POST['first']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `fname` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
			//echo $fname;
		}
		if($choice==2)
		{
			$last = mysqli_real_escape_string($con, $_POST['last']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `lname` = '$last' WHERE `stud_data`.`uid` = '$uid'");
			//echo $fname;}
		}
		if($choice==3)
		{
			$fname = mysqli_real_escape_string($con, $_POST['emailid']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `email` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
			//echo $fname;}
		}
		if($choice==5)
		{
			$fname = mysqli_real_escape_string($con, $_POST['mobile']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `mob` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==7)
		{
			$fname = mysqli_real_escape_string($con, $_POST['address']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `address` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==8)
		{
			$fname = mysqli_real_escape_string($con, $_POST['city']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `city` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==9)
		{
			$fname = mysqli_real_escape_string($con, $_POST['pin']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `pin` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==10)
		{
			$fname = mysqli_real_escape_string($con, $_POST['state']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `state` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
		}
		
		if($choice==6)
		{
			$fname = mysqli_real_escape_string($con, $_POST['Gender']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `Gender` = '$fname' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==4)
		{
			$bdate = mysqli_real_escape_string($con, $_POST['Birthday_day']);
			$bmonth = mysqli_real_escape_string($con, $_POST['Birthday_Month']);
			$byear = mysqli_real_escape_string($con, $_POST['Birthday_Year']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `bdate` = '$bdate', `bmonth` = '$bmonth', `byear` = '$byear' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==11)
		{
			$bx = mysqli_real_escape_string($con, $_POST['bx']);
			$px = mysqli_real_escape_string($con, $_POST['px']);
			$yx = mysqli_real_escape_string($con, $_POST['yx']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `bx` = '$bx', `px` = '$px', `yx` = '$yx' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==12)
		{
			$bxii = mysqli_real_escape_string($con, $_POST['bxii']);
			$pxii = mysqli_real_escape_string($con, $_POST['pxii']);
			$yxii = mysqli_real_escape_string($con, $_POST['yxii']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `bxii` = '$bxii', `pxii` = '$pxii', `yxii` = '$yxii' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==13)
		{
			$ba = mysqli_real_escape_string($con, $_POST['ba']);
			$pa = mysqli_real_escape_string($con, $_POST['pa']);
			$ya = mysqli_real_escape_string($con, $_POST['ya']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `ba` = '$ba', `pa` = '$pa', `ya` = '$ya' WHERE `stud_data`.`uid` = '$uid'");
		}
		if($choice==14)
		{
			$fname = mysqli_real_escape_string($con, $_POST['stype']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `stype` = '$fname' WHERE `stud_data`.`uid`= '$uid'");
		}
		if($choice==15)
		{
			$fname = mysqli_real_escape_string($con, $_POST['gap']);
			mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `gap` = '$fname' WHERE `stud_data`.`uid`= '$uid'");
		}
	}
}

mysqli_close($con);
header("location: edit_profile.php");

?>