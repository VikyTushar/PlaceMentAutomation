<?php
//$choice=0;
if(isset($_GET['choice']))
$choice=$_GET['choice'];
else
$choice=0;
//$user_name=$_GET['user_name'];

//include("2nd.php");
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

		echo "<h4><table border='0' style='width:80%'><tr><td></td><td></td><td style='text-align:right;font-size:14pt;'><strong><a href='home.php'>Back</a></strong></td></tr></table></h4>";
		$sql = "SELECT * FROM stud_data WHERE uid='$id'";
		$result=mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		echo '<div style=float:right>Change Profile Picture<br>';
		echo "<img src=".$row['addr']." width=150 height=200>";
		echo "<form action='uploadimage.php' method='POST' enctype='multipart/form-data'>	
			<input type='file' name='file' accept='image/*'>
			<input type='hidden' name='id' value='$id'>
			<input type='submit' name='submit' value='Upload'>";
		echo"</form></div><div id=lside style='float:left;'>";
			echo"<form action='formedit.php?choice=$choice&uid=$id'method='post'>";
			 echo "<h4><table border='0' style='width:150%'>";
			 
		//echo "<h3 style=text-align:right><a href=profileimageupload.php?id=$id>Change pic</a><h3>";
		
			if($choice==1)
			{
				echo "<tr><td>First Name</td><td><input type='text' name='first' placeholder='Enter Name'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else      
				{ 
					echo "<tr><td>First Name</td><td>" . $row['fname'] . "</td><td><a href='edit_profile.php?choice=1'>Edit</a></td></tr>";
				}
			if($choice==2)
			{
				echo "<tr><td>Last Name</td><td><input type='text' name='last' placeholder='Enter Last Name'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			 echo "<tr><td>Last Name</td><td>" . $row['lname'] . "</td><td><a href='edit_profile.php?choice=2'>Edit</a></td></tr>";
			 }
			 if($choice==3)
			{
				echo "<tr><td>Email</td><td><input type='text' id='' name='emailid' placeholder='Enter New Email'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			 echo "<tr><td>Email</td><td>" . $row['email'] . "</td><td><a href='edit_profile.php?choice=3'>Edit</a></td></tr>";
			} 
			/*   date of birth*/
			if($choice==4)
			{
				echo "<tr>
				<td>DOB</td>
				 
				<td>
				<select name='Birthday_day' id='Birthday_Day'>
				<option value='-1'>Day:</option>
				<option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option>
				<option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>
				 <option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option>
				<option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option>
				<option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option>
				</select>
				 
				<select id='Birthday_Month' name='Birthday_Month'>
				<option value='-1'>Month:</option><option value='January'>Jan</option><option value='February'>Feb</option><option value='March'>Mar</option>
				<option value='April'>Apr</option><option value='May'>May</option><option value='June'>Jun</option><option value='July'>Jul</option><option value='August'>Aug</option>
				<option value='September'>Sep</option><option value='October'>Oct</option><option value='November'>Nov</option><option value='December'>Dec</option></select>
				 
				<select name='Birthday_Year' id='Birthday_Year'>
				 
				<option value='-1'>Year:</option><option value='1999'>1999</option>
				<option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option>
				<option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option>
				<option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option>
				<option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option></select></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			echo "<tr><td>DOB</td><td>".$row['bdate'].$row['bmonth'].$row['byear']."</td><td><a href='edit_profile.php?choice=4'>Edit</a></a></td></tr>";
			} 
			 if($choice==5)
			{
				echo "<tr><td>Mobile</td><td><input type='text' id='' name='mobile' placeholder='Enter Mobile Number'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			 echo "<tr><td>Mobile No</td><td>" . $row['mob'] . "</td><td><a href='edit_profile.php?choice=5'>Edit</a></td></tr>";
				}
			 if($choice==6)
			{	
				echo"<tr><td>GENDER</td><td>Male <input type='radio' name='Gender' value='Male' />Female <input type='radio' name='Gender' value='Female' /></td><td><input type='submit' value='Submit'></td></tr>";
			}	
			else{
			echo "<tr><td>Gender</td><td>" . $row['gender'] . "</td><td><a href='edit_profile.php?choice=6'>Edit</a></td></tr>";
			}
			if($choice==7)
			{
				echo "<tr><td>Address</td><td><input type='text' id='' name='address' placeholder='Enter Your Address'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			echo "<tr><td>Address</td><td>" . $row['address'] . "</td><td><a href='edit_profile.php?choice=7'>Edit</a></td></tr>";
			}
			if($choice==8)
			{
				echo "<tr><td>City</td><td><input type='text' id='' name='city' placeholder='Enter Name of City'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			echo "<tr><td>City</td><td>" . $row['city'] . "</td><td><a href='edit_profile.php?choice=8'>Edit</a></td></tr>";
			}
			if($choice==9)
			{
				echo "<tr><td>Pin Code</td><td><input type='text' id='' name='pin' placeholder='Enter Pin Code'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			
			echo "<tr><td>Pin Code</td><td>" . $row['pin'] . "</td><td><a href='edit_profile.php?choice=9'>Edit</a></td></tr>";
			}

			if($choice==10)
			{
				echo "<tr><td>State</td><td><input type='text' id='' name='state' placeholder='Enter Name Of The State'></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else{
			echo "<tr><td>State</td><td>" . $row['state'] . "</td><td><a href='edit_profile.php?choice=10'>Edit</a></td></tr>";
			}
			echo "<tr><td>Country</td><td>" . $row['country'] . "</td><td>Edit</td></tr>";
			echo "</table></h4>";
			echo"<h2>Qualification :<br></h2>";
			echo"<h4><table border='0' style='width:60%;'>";
			if($choice==14)
			{
				echo"<tr><td>Student(Reg/Dipl)</td><td>Regular <input type='radio' name='stype' value='Regular' />Diploma <input type='radio' name='stype' value='Diploma' /></td><td><input type='submit' value='Submit'></td></tr>";
			}
			else
				echo"<tr><td>Student(Reg/Dipl):</td><td>".$row['stype']."</td><td><a href='edit_profile.php?choice=14'>Edit</a></td></tr>";
				
			if($choice==15)
			{
								echo"<tr><td>Education Gap</td><td>Yes<input type='radio' name='gap' value='Yes' />No <input type='radio' name='gap' value='No' /></td><td><input type='submit' value='Submit'></td></tr>";

			}
			else 
			{	echo"<tr><td>Education Gap:</td><td>".$row['gap']."</td><td><a href='edit_profile.php?choice=15'>Edit</a></td></tr>";
			}
			echo"</table></h4>";
			echo "<h4><table border='1' style='width:150%;text-align:center;'>
		  <tr>
		  <th>Examination</th>
		  <th>Board</th>
		  <th>Percentage</th>
		  <th>year</th>
		</tr>";
		if($choice==11)
		{
		echo "<tr><td>CLASS X</td><td><input type=text name=bx placeholder=board></td><td><input type=text name=px placeholder=marks></td><td><input type=text name=yx placeholder=year></td><td><input type='submit' value='Submit'></td></tr></tr>";
		}
		else
		  echo "<tr><td>CLASS X<a href='edit_profile.php?choice=11'><img src='images/edit.png' height=17 width=25/></a></td><td>".$row['bx']."</td><td>".$row['px']."</td><td>".$row['yx']."</td></tr>";
		if($choice==12)
		{
		echo "<tr><td>CLASS XII</td><td><input type=text name=bxii placeholder=board></td><td><input type=text name=pxii placeholder=marks></td><td><input type=text name=yxii placeholder=year></td><td><input type='submit' value='Submit'></td></tr></tr>";
		}else
		
		  echo "<tr><td>CLASS XII<a href='edit_profile.php?choice=12'><img src='images/edit.png' height=17 width=25/></td><td>".$row['bxii']."</td><td>".$row['pxii']."</td><td>".$row['yxii']."</td></tr>";
		if($choice==13)
		{
		echo "<tr><td>AGGREGATE</td><td><input type=text name=ba placeholder=board></td><td><input type=text name=pa placeholder=marks></td><td><input type=text name=ya placeholder=year></td><td><input type='submit' value='Submit'></td></tr></tr>";
		}
		else
		 echo "<tr><td>AGGREGATE<a href='edit_profile.php?choice=13'><img src='images/edit.png' height=17 width=25/></td><td>".$row['ba']."</td><td>".$row['pa']."</td><td>".$row['ya']."</td></tr>";

			
}
  
echo "</table></h4>";
echo"</form></div>"; 
mysqli_close($con)
?>
