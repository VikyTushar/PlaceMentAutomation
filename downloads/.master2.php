<?php
		$query_string="?error=Logged Out successfully!";
?>
<div id="mainmenu">
				<ul id="menu">
					<li><a class="current" href="http://localhost/tap/home.php">Home</a></li>
					<li><a href="http://localhost/tap/more.php">Company Profiles</a></li>
						<!--<ul><li><a href="more.php">Microsoft</a></li><li><a href="inner.html">TCS</a></li><li><a href="inner.html">JD</a></li></ul>-->
   					<li><a href="#">Downloads</a></li>
					<li><a href="http://localhost/tap/forum.php">Forum</a></li>
					<li><a href="http://localhost/tap/contact.php">Contact Us</a></li>
					<li><a href="http://localhost/tap/show_profile.php">Profile</a></li>
					<li><a href="http://localhost/tap/index.php<?php echo $query_string;?>">Logout(<?php echo $user_name;?>)</a></li>
				</ul>
			</div>
