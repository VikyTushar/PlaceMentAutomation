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
			if($user_name=="admin")
			{
				include("masteradmin.php");
			}
			
			else
			{ 
				include("master2.php");
			} 
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
<!--Google map-->
			<style>
				#map_canvas 
				{
					width: 800px;
					height: 400px;
				}
			</style>
			<script src="https://maps.googleapis.com/maps/api/js"></script>
	
			<script>
				function initialize() {
				var mapCanvas = document.getElementById('map_canvas');
				var mapOptions = {
				center: new google.maps.LatLng(16.654138,74.262495),
					  zoom: 15,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(mapCanvas, mapOptions)
			  }
			  google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div id="map_canvas"></div>

		<!--Google map-->
			<div id="main">
				<h2 class="inner">Contact Us</h2>
				<form method="post" action="mail/email.php">
					<p>
						<label for="name">Name:</label>
						<input type="text" class="text" name="name" id="name" />
					</p>
					<p>
						<label for="email">E-mail Address:</label>
						<input type="text" class="text" name="email" id="email" />
					</p>
					<p>
						<label for="phone">Phone:</label>
						<input type="text" class="text" name="phone" id="phone" />
					</p>
					<p>
						<label for="text">Message:</label>
						<textarea class="text" name="text" id="text"></textarea>
					</p>
					<p>
						<input type="submit" class="submit" value="Send" />
					</p>
				</form>
			</div>
			<!-- /main -->
			
			<!-- side -->
<div id="side">
	  <h4><img src="images/Heddur.jpg" width="260" height="222"  alt=""/></h4>
	  <h2><strong>Dr. R. B. Heddur- Head , T &amp; P</strong></h2>
	  <h2>Contact Details</h2>
	  <p>Telephone – 0231-2638141/3, 2636202 ext. 237</p>
	  <p>Fax – 0231-2638881</p>
	  <p>Mob – 9823766299</p>
	  <p>Email – drheddur@yahoo.com; drheddur@gmail.com</p>
	  <p>&nbsp;</p>
      
</div>
<!-- /side -->	  
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
					</p>
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
