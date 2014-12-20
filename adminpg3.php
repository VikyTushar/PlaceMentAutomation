<?php 
      include("2nd.php");
	if(!isset($_SESSION['username']))
      {
             $query_string="?error=You are not logged In!";
             $next_page = 'index.php';
             header('Location: http://localhost/tap/'.$next_page.$query_string);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Training And Placement</title>
		<link rel="stylesheet" href="css/main.css" type="text/css" />
	</head>
<body>
	<div id="bg">
		<div class="wrap">			
			<!-- logo -->
			<h1>KitCoek</h1>
			<!-- /logo -->			
			<!-- menu -->
			<?php 
				include("masteradmin.php");
			?>	
			<!-- /menu -->			
			<div id="pitch">
				<div id="slideshow">
					<div class="active">
						<img src="images/pitch/image.gif" alt="" />
						<div class="overlay transparent">
							<h2>Professional Approach</h2>
							<p>We take care of our valuable students for their bright career.</p>
						</div>
					</div>					
				</div>
			</div>
			<!-- main -->
                          <div>
                          <p style='font-size:17pt; color:BLUE;'>List Of All Students ||<a href='loplaced.php'> List Of Placed Students </a>|| <a href="lonplaced.php">List Of Unplaced Students</a></p>
                          <table  style='border:1px solid;width:85%; text-align:left; font-size:14pt;margin-bottom: 20px; padding: 9px 10px;'>
                          <thead style='font-weight:bold; padding: 9px 10px; text-align: left;border:1px solid;'>
                          <td style='padding: 9px 10px; border:1px solid;'>Name</td>
                      
						  <td style='padding: 9px 10px; border:1px solid;'>Status</td>
						  <td style='padding: 9px 10px; border:1px solid;'>Update Status</td>
                         </thead>
                          <?php
                                include("stud_db.php");
                                $sql = "SELECT fname,lname,status FROM stud_data";
                                $result=mysqli_query($con,$sql);
                                //$row = mysqli_fetch_array($result);
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                {
                                echo "<tr><td style='padding: 9px 10px; text-align: left;border:1px solid;'>".$row['fname']." ".$row['lname']."</td><td style='padding: 9px 10px; text-align: left;border:1px solid;'>".$row['status']."</td><td style='padding: 9px 10px; text-align: left;border:1px solid;'><a href=adminpg4.php?name=".$row['fname'].">Change<a></td>";

                                }
                               mysqli_close($con);
                          ?>
                          </table>
                          </div>
			  <!-- /main -->

			
	
		</div>

		<!-- footer -->
		<div id="footer">
			<div id="footerbg">
				<div class="wrap">

					<!-- footer links -->
					<p id="footer_menu">
						<a href="http://kitcoek.in/">Kit's College Of Engeneering</a>
						<a href="http://210.212.190.172/">Moodle</a>
						<a href="copyright.pdf">Terms and Conditions</a>

						<!-- credit link -->
<!-- 						<a href="http://www.solucija.com" title="Free CSS Templates">Solucija</a>
 -->					</p>
					<!-- /footer links -->

					<p id="copy">placement automation <span>professional approach</span></p>

					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- /footer -->

	</div>
</body>
</html>
