<?php
include('stud_db.php');
$username=$_GET['usernamesignup'];
$email=$_GET['emailsignup'];
$sql="select id from stud_record where user_name='$username'";
$result=mysqli_query($con,$sql);
		if (!$result)
		{
  			die('Error: ' . mysqli_error($con));
		}
		else
		{
			$row = mysqli_fetch_row($result);
			$id=$row[0];
			mysqli_query ($con,"insert into stud_data(uid,email,addr)values('$id','$email','images/photo.jpg')");
			mysqli_close($con);
		}

$password=$_GET['passwordsignup'];
$query_string = '?usernamesignup=' . $username;
require "PHPMailerAutoload.php";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';
 
 
$mail->Username = "abc@gmail.com";
$mail->Password = "xyz";
 
$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
//$mail->From = $_POST['email'];
$mail->From="admin@donotreplay.com";
//$ok=$_POST['email'];
$mail->addAddress($email,"User 1");
//$mail->addAddress("user.2@gmail.com","User 2");
 
//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");
 
$mail->Subject = "DoNotReply@Reply.com";

$mail->Body ="Welcome<br /> $username.<br /><br />Your Account has been created with<br /><br />Username:$username<br/>Password:$password.<br/><br/>Kitcoek TPO.";
//http://localhost/tap/home.php
	$next_page = 'localhost/tap/student_login1.php';
if(!$mail->Send())
    header('Location: http://'.$next_page . $query_string);
else
	header('Location: http://'. $next_page . $query_string);
?>

