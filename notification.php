<?php 	
		if(isset($_POST['submit']))
		{
		include("stud_db.php");
		// escape variables for security
		$Criteria = mysqli_real_escape_string($con, $_POST['criteria']);
		$Message = mysqli_real_escape_string($con, $_POST['text']);
		
		$query_string = '?criteria=' . $Criteria;
		$query_string .= '&text='.$Message;
		
		//$next_page = 'mail/notificationmail.php';
		$next_page='mail/trying.php';
		header('Location: http://localhost/tap/'. $next_page . $query_string);
		}
		
		if(isset($_POST['submit5']))
		{
		
			if(isset($_POST['criteria']))
			{
				$Criteria=$_POST['criteria'];
			}
			else 
			{
				$Criteria="";
			}
			$query_string = '?criteria=' . $Criteria;
			$next_page='printall.php';
			header('Location: http://localhost/tap/'. $server_dir . $next_page.$query_string);
		}
?>
