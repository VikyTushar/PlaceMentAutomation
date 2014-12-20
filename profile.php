<?php
echo"<h2>Student Profile :<br></h2>";
include("stud_db.php");
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

     echo "<h4><table border='0' style='width:50%'><tr><td></td><td></td><td style='text-align:right;font-size:14pt;'><strong><a href='edit_profile.php'>Edit Profile</a></strong></td></tr></table></h4>";
     $sql = "SELECT * FROM stud_data WHERE uid='$id'";
     $result=mysqli_query($con,$sql);
	
     $row = mysqli_fetch_array($result);
	 //$row=mysqli_fetch_array($result,MYSQLI_NUM);
	 
		echo "<div style=float:right><img style='float:right;' src=".$row['addr']." width=150 height=200></div>";
		//echo "<h3 style=text-align:right><a href=profileimageupload.php?id=$id>Change pic</a><h3>";
	
	echo"<div id=lside style=float:left>";    
	echo "<h4><table border='0' style='width:150%'>";
     echo "<tr><td>First Name</td><td>" . $row['fname'] . "</td></tr>";
     echo "<tr><td>Last Name</td><td>" . $row['lname'] . "</td></tr>";
     echo "<tr><td>Email</td><td>" . $row['email'] . "</td></tr>";
     echo "<tr><td>DOB</td><td>".$row['bdate'].$row['bmonth'].$row['byear']."</td></tr>";
     echo "<tr><td>Mobile No</td><td>" . $row['mob'] . "</td></tr>";
     echo "<tr><td>Gender</td><td>" . $row['gender'] . "</td></tr>";
     echo "<tr><td>Address</td><td>" . $row['address'] . "</td></tr>";
     echo "<tr><td>City</td><td>" . $row['city'] . "</td></tr>";
     echo "<tr><td>Pin Code</td><td>" . $row['pin'] . "</td></tr>";
     echo "<tr><td>State</td><td>" . $row['state'] . "</td></tr>";
     echo "<tr><td>Country</td><td>" . $row['country'] . "</td></tr>";
     echo "</table></h4>";
     echo"<h2>Qualification :<br></h2>";
	 echo"<h4><table border='0' style='width:150%'><tr><td>Student(Reg/Dipl):</td><td>".$row['stype']."</td></tr><tr><td>Education Gap:</td><td>".$row['gap']."</td></tr></table></h4>";
     echo "<h4><table border='1' style='width:150%;text-align:center;'>
  <tr>
  <th>Examination</th>
  <th>Board</th>
  <th>Percentage</th>
  <th>year</th>
</tr>";
  echo "<tr><td>CLASS X</td><td>".$row['bx']."</td><td>".$row['px']."</td><td>".$row['yx']."</td></tr>";
  echo "<tr><td>CLASS XII</td><td>".$row['bxii']."</td><td>".$row['pxii']."</td><td>".$row['yxii']."</td></tr>";
  echo "<tr><td>AGGREGATE</td><td>".$row['ba']."</td><td>".$row['pa']."</td><td>".$row['ya']."</td></tr>";
	//echo"</div>";
}

echo "</table></h4></div>";
mysqli_close($con)
?>
