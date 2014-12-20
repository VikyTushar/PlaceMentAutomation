<?php
if(isset($_GET['criteria']))
		{
			//echo "Hello";
			$Criteria=$_GET['criteria'];
		}
		else 
		{
			$Criteria="";
		}
				echo"<div  style='float: right;'><img src='images/hi.png' width='300' height='125'/></div></br></br>";

		echo "<div style='text-align:left'><p>R.S No. 1998/1-3, Gokul Shirgaon, Kolhapur - 416 234.<br />
				  Maharashtra, INDIA.<br />
				  Tel. +91 231 263 8141-43<br />
				  Fax +91 231 263 8881<br />
				  Email : info@kitcoek.in, info@mail.kitcoek.org<br />
			    Web : www.kitcoek.in</p></div>";
		echo"<hr>";
	if($Criteria=="")
	{
		echo"<h3 >List of All Students </h3>";
	}		 
	else
	{
		echo"<h3 style='text-align:center;'>List of Students above ".$Criteria."%</h3>";
	}
	
	echo "<table  style='border:1px solid;width:100%; text-align:left; font-size:14pt;margin-bottom: 20px; padding: 0px 0px;'>
        <thead style='font-weight:bold; padding: 9px 10px; text-align: left;border:1px solid;'>
        <td style='padding: 9px 10px; border:1px solid;'>Name</td>
        <td style='padding: 9px 10px; border:1px solid;'>Contact</td>
		<td style='padding: 9px 10px; border:1px solid;'>Email</td>
		<td style='padding: 9px 10px; border:1px solid;'>Aggregate</td>
		</thead>";
		 include("2nd.php");
		if(!isset($_SESSION['username']))
		{
             $query_string="?error=You are not logged In!";
             header('Location: http://localhost/tap/index.php'.$query_string);
		}
		$count=0;
		include("stud_db.php");
		$sql = "SELECT fname,lname,mob,email,pa,stype FROM stud_data";
		$result=mysqli_query($con,$sql);
		$emails = array();
		//$row = mysqli_fetch_array($result);
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
				if($Criteria<=$row['pa'])
				{
				echo "<tr><td style='padding: 9px 10px; text-align: left;border:1px solid;'>".$row['fname']." ".$row['lname']."</td><td style='padding: 9px 10px; border:1px solid;'>".$row['mob']."</td><td style='padding: 9px 10px; border:1px solid;'>".$row['email']."</td><td style='padding: 9px 10px; border:1px solid;'>".$row['pa']."</td></tr>";
				}
		}
		mysqli_close($con);
			echo"<button onclick='myFunction()'>Print</button>
			<script>
			function myFunction() {
				window.print();
			}
			</script>";
?>
