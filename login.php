<?php
        //connection
        include("stud_db.php");
        session_start();
                $user_name=mysqli_real_escape_string($con,$_POST['username']);

				$pwd1 = mysqli_real_escape_string($con,$_POST['password']);
				$pwd=md5($pwd1);
                $sql = "SELECT pwd FROM stud_record WHERE user_name ='$user_name'";
		$result=mysqli_query($con,$sql);
		if (!$result)
		{
  			die('Error: ' . mysqli_error($con));
		}
		else
		{
			$row = mysqli_fetch_row($result);
			if ( $pwd == $row[0])
			{
				$sql = "SELECT id FROM stud_record WHERE user_name ='$user_name'";
				$result=mysqli_query($con,$sql);
				if (!$result)
				{
  					die('Error: ' . mysqli_error($con));
				}

				$row = mysqli_fetch_row($result);
				$id=$row[0];
				$query_string = '?id=' .$id;
                                session_start();
                                //$_SESSION['username']=$user_name;
                                $_SESSION['username']=$_POST['username'];
				$server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
				if($user_name=="admin")
				{
					$next_page='adminpg.php';
				}
				else
				{
					$next_page = 'home.php';
				}	
				header('Location: http://'.$server_dir.$next_page.$query_string);
			}

			else
				$error='Invalid username or password<br />';
				if ($error != '') {
   				// Back to login page
   				$next_page = 'index.php';
   				// Add error message to the query string
   				$query_string .= '?error=' . $error;
   				// Redirection needs absolute domain and phisical dir
				$server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
   				// This message asks the server to redirect to another page
				header('HTTP/1.1 303 See Other');
   				header('Location: http://' . $server_dir . $next_page . $query_string);
   				}
			 //#die("You are now logged in. Please <a href='members.php?view=$user'>" .
			//#"click here</a> to continue.<br><br>");
			}
			mysqli_close($con);
			?>
