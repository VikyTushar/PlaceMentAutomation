<?php
     $query_string = '?notice=' ."notice added";
     // Redirection needs absolute domain and physical dir
     $server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
     //goto confirmation page
     $next_page = 'adminpg.php';

     include("2nd.php");
     include("my_db.php");
     $notice=mysqli_real_escape_string($con,$_POST['notice']);
     $sql="INSERT INTO news_notice (notice) VALUES ('$notice')";
     if (!mysqli_query($con,$sql))
     {
	die('Error: ' . mysqli_error($con));
     }
      mysqli_close($con);
      header('Location: http://'. $server_dir . $next_page . $query_string);

?>