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

$sql = "SELECT * FROM stud_data WHERE uid='$id'";
$result=mysqli_query($con,$sql);
#$row = mysqli_fetch_row($result);

echo "<h4><table border='0' style='width:60%'>";
$row = mysqli_fetch_array($result); 
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
  echo "<h4><table border='1' style='width:50%;text-align:center;'> 
  <tr>
  <th>Examination</th>
  <th>Board</th>
  <th>Percentage</th>
  <th>year</th>
</tr>"; 
  echo "<tr><td>CLASS X</td><td>".$row['bx']."</td><td>".$row['px']."</td><td>".$row['yx']."</td></tr>";
  echo "<tr><td>CLASS XII</td><td>".$row['bxii']."</td><td>".$row['pxii']."</td><td>".$row['yxii']."</td></tr>";
  echo "<tr><td>AGGREGATE</td><td>".$row['ba']."</td><td>".$row['pa']."</td><td>".$row['ya']."</td></tr>";

}

echo "</table></h4>";
mysqli_close($con)
?>
