<?php
		include("2nd.php");
		if(!isset($_SESSION['username']))
		{
             $query_string="?error=You are not logged In!";
             //$server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
            //$next_page = 'index.php';
            header('Location: http://localhost/tap/index.php'.$query_string);

		}

		$Criteria=$_GET['criteria'];
		$message=$_GET['text'];
		
		//echo $Criteria;
		
		$count=0;
		include("stud_db.php");
		$sql = "SELECT fname,lname,email,mob,pa FROM stud_data";
		$result=mysqli_query($con,$sql);
		$emails = array();
		//$row = mysqli_fetch_array($result);
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			if($Criteria<=$row['pa'])
			{
				$emails[]=$row['email'];
				$count=$count+1;
				
				
			//$mail=$row['email'];
			}//
		}	
		require "PHPMailerAutoload.php";
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Mailer = 'smtp';
			$mail->SMTPAuth = true;
			$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			$mail->Username = "abc@gmail.com";
			$mail->Password = "xyz";
			 $mail->IsHTML(true); 
			$mail->SingleTo = true; 
			
			
			//$count =1;
				$mail->From="admin@donotreplay.com";
				//$mail->addAddress($row['email'],"User 1");
			/*	
				if(!$mail->Send())
			{
				echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
			}*/
			
						//http://localhost/tap/home.php
			for($i=0;$i<count($emails);$i++)
			{
				$to = $emails[$i];
			
				$mail->From="admin@donotreplay.com";
				$mail->addAddress($emails[$i],"User 1");
				$mail->Subject = "DoNotReply@Reply.com";

				$mail->Body =$message;
							
				if(!$mail->Send())
				{
					echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
				}
				
			}
			
		//echo $count;
	   mysqli_close($con);


?>
