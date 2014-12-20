<?php
     $query_string = '?news=' ."news added";
     // Redirection needs absolute domain and phisical dir
     $server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
     //goto confirmation page
     $next_page = 'adminpg.php';

     include("2nd.php");
     include("stud_db.php");
     $news=mysqli_real_escape_string($con,$_POST['news']);
     $sql="INSERT INTO news_notice (news) VALUES ('$news')";
     if (!mysqli_query($con,$sql))
     {
	die('Error: ' . mysqli_error($con));
     }
      mysqli_close($con);
      header('Location: http://'. $server_dir . $next_page . $query_string);

?>