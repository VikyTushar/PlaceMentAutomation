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
			<!-- main --><!-- /main -->
			  
			  <!-- side --><!-- /side --><a href="http://www.thyrocare.com//"><img src="images/bio_company_6.jpeg" width="165" height="123"  alt=""/></a><a href="http://www.adp.in/"><img src="images/adp.jpg" width="219" height="121"  alt=""/><a><a href="http://www.bicon.com/product_info/pi_implants.html"><img src="images/bio_company_2.jpeg" width="190" height="124"  alt=""/></a><a href="http://www.ddenterprise.in/"><img src="images/bio_company_3.jpeg" width="173" height="130"  alt=""/></a><a href="http://www.kirloskar.com/"><img src="images/download (5).jpg" width="173" height="127"  alt=""/></a></p>
			<p><a href="http://www.tcs.com/careers/Pages/default.aspx"><img src="images/download (1).jpg" width="180" height="132"  alt=""/></a><a href="http://www.jadeglobal.com/"><img src="images/download.jpg" width="193" height="135"  alt=""/></a><a href="https://www.microsoft.com"><img src="images/download.png" width="178" height="132"  alt=""/></a><a href="http://www.godrejinfotech.com/"><img src="images/godrej.jpg" width="187" height="130"  alt=""/></a><a href="http://www.deere.com/wps/dcom/globalhome/deerecom/global_home.page"><img src="images/john-deere.jpg" width="192" height="131"  alt=""/></a></p>
			<p><a href="http://www.rellife.com/"><img src="images/rlslogo.jpg" width="213" height="162"  alt=""/></a><a href="http://web.tatatechnologies.com/"><img src="images/tata-tech.jpg" width="258" height="159"  alt=""/></a><a href="http://www.google.co.in/about/careers/locations/bangalore/"><img src="images/download (2).jpg" width="238" height="165"  alt=""/></a><a href="http://www.persistent.com/"><img src="images/download (3).jpg" width="240" height="168"  alt=""/></a></p>
			<p><a href="http://www.techmahindra.com/pages/default.aspx"><img src="images/download (1).png" width="231" height="161"  alt=""/></a><a href="http://www.infosys.com/"><img src="images/download (2).png" width="237" height="159"  alt=""/></a><a href="http://www.lntinfotech.com/careers/index.aspx"><img src="images/images.jpg" width="256" height="161"  alt=""/></a><a href="http://www.amazon.jobs/location/bangalore-india"><img src="images/download (4).jpg" width="231" height="162"  alt=""/></a></p>
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
