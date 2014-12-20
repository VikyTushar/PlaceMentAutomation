<?php 
				$user_name = $_POST['usernamesignup'];
				$email = $_POST['emailsignup'];
				$pwd1 = $_POST['passwordsignup'];
				$pwd=md5($pwd1);			
				$query_string = '?usernamesignup=' . $user_name;
				$query_string .= '&emailsignup='.$email;
				$query_string .= '&passwordsignup='.$pwd1;
				$next_page = 'mail/emailvalid.php';
/*new code*/
		include ("stud_db.php");
		// escape variables for security
		$user_name = mysqli_real_escape_string($con, $_POST['usernamesignup']);
		$email = mysqli_real_escape_string($con, $_POST['emailsignup']);
		$pwd1 = mysqli_real_escape_string($con,$_POST['passwordsignup']);
		$pwd=md5($pwd1);
		$sql="INSERT INTO stud_record (user_name,pwd,email)
		VALUES ('$user_name','$pwd', '$email')";

		if (!mysqli_query($con,$sql))
		{
  			die('Error: ' . mysqli_error($con));
		}
		mysqli_close($con);
		header('Location: http://localhost/tap/'.$next_page . $query_string);

?>
