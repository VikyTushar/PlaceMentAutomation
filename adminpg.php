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
			<!-- /main -->
              <div id="main">
				<h2 class="inner">Upload New Files</h2>
				</br>
                <form action="upload.php" method="post" enctype="multipart/form-data">
	              <p>
	                <input type="file" name="file" accept="">
	              </p>
	              <p>
	                <input type="submit" name="submit" value="Upload">
                  </p>
	              </form>  
	              <h2>Send Notification Mail</h2>
	              <p>
				<form method="post" action="notification.php">
						<label for="text">Message:<Strong>Criteria</strong> </label>
	              <td><!--<p>
	                <input name="diploma" type="checkbox" value="Diploma" />
	                Diploma Holders 
	                </p>
	                <p>
	                  <input name="gap" type="checkbox" value="gap" />
	                Having Drop</p>-->
	                <p>
	                  <input type="radio" name="criteria" value="" />
	                All Students	                </p>
	                <p>
	                  <input type="radio" name="criteria" value=57 />
                    Above 57%	                </p>
	                <p>
	                  <input type="radio" name="criteria" value=60 />
                    Above 60%	                </p>
	                <p>
	                  <input type="radio" name="criteria" value=65 />
                    Above 65%</p>
	                <p>
  <input type="submit" name="submit5" value="Display" />
                    </p>
                  </td>
						<textarea class="text" name="text" id="text"></textarea>
					</p>
	              <p>
						<input type="submit" class="submit" value="Send" name="submit"/>
				  </p>	              
                </form>                
		  </div>
			<p>
			    <!-- side -->
			</p>
		  <div id="side">
			<h4>Latest News</h4>
				<div class="news">
				 <form action="news.php" method=post>
                                 <textarea name="news" placeholder="Enter latest news here..."></textarea><br>
                                 <input type="submit" value="set news">
                                 </form>
                                 </div>
                                 <div>
					<h5><a href="#">News title</a></h5>
					<marquee id="Marquee" height="50px" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" direction="up">
                                        <?php include("newsphp.php");?>
                    </marquee>
                                 </div>
				<div id="notice">
					<h4>Notice Board</h4>
					<form action="notice.php" method=post>
                                              <textarea rows="3" name="notice" placeholder="Put new notice here..."></textarea><br>
                                              <input type="submit" value="set notice">
                                        </form>
                                        <marquee id="Marquee" height="50px" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" direction="up">
                                        <?php include("noticephp.php");?>
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
