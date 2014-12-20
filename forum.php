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
	<head><title>Forum</title>
	<link href="css/reset1.css" rel="stylesheet" type="text/css">
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
		});
		
		$(document).ready(function() {
			$('div.photo a').fancyZoom({scaleImg: true, closeOnClick: true});
		});
	</script>
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
				<h2 class="inner">Forum</h2>
			<div id="page">
				
				<!-- blog post -->
				<div class="blog-post">
				  <div class="clear"></div>
				</div>
				    <div class="comment_input">
				      <form id="form1">
				       <input type="hidden" name="name" value="<?php echo $user_name;?>"/>
				        </br>
					</br>  
				        <textarea name="comments" placeholder="Leave Your Message Here..." style="width:635px; height:100px;"></textarea>
				        </br>
				        </br>
				        <a href="forum.php" onclick="commentSubmit()" class="button">Post</a></br>
			          </form>
			        </div>
                    <div id="comment_logs">
    	Loading comments...
    </div>
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
