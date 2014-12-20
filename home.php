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
			<div id="main">
				<div id="intro">
					<h2>Welcome</h2>
					<p>This era of globalization has opened enormous opportunities for young and talented budding engineers in all the walks of life. As a result, the expectations from the young engineers are that they should mould themselves seamlessly in to the global corporate culture.The T&P department provides ample opportunities for placements and entrepreneurship by organizing seminars, workshops and training programs for enhancing the personality traits and facilitates the transition of our students from academics to corporate life. </p>
				</div>			
				<div id="bits">
				  <div class="bit">
						<h4>Approach</h4>
						<div class="photo">
							<a href="#approach"><img src="images/thumb1.png" alt="Thumb" /></a>
						</div>
						<p>Computer based information system are designed to improve existing system. Whatever the information, TPO has to pass to the student and he or she can inform online. Improve accuracy in result.</p>
						<p class="more"><a href="#">Read More</a></p>
						<div id="approach"></div>
					</div>
                  <video width="400" height="300" controls="controls" >
                    <source src="downloads/Google Student Ambassador 2014.mp4" type="video/mp4" />
                  </video>
					<div class="clear"></div>
				</div>
			</div>
			<!-- /main -->
			
			<!-- side -->
			<div id="side">
				<h4>Latest News</h4>
				
				<div class="news">
					<h5><a href="#">News title</a></h5>
					
                     <?php include("newsphp.php");?>
                                       
				</div>
				
				
				<div id="notice">
					<h4>Notice Board</h4>
					<marquee id="Marquee" height"75px" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" direction="up">
					<?php include ("noticephp.php");?>
					</marquee>
				</div>

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
