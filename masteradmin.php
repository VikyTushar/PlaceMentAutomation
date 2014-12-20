<?php
		$query_string="?error=Logged Out successfully!";
?>
<div id="mainmenu">
				<ul id="menu">
					<li><a class="current" href="adminpg.php">Home</a></li>
					<li><a href="more.php">Company Profiles</a></li>
						<!--<ul><li><a href="more.php">Microsoft</a></li><li><a href="inner.html">TCS</a></li><li><a href="inner.html">JD</a></li></ul>-->
					</li>
					<li><a href="Forum.php">Forum</a></li>
					<li><a href="adminpg3.php">Placement Status</a></li>
					<li><a href="adminpg2.php">Users</a>
					<!--	<ul><li><a href="adminpg2.php">Manage Users</a></li>></ul> -->
					</li>
					<li><a href="index.php<?php echo $query_string;?>"><?php echo $user_name;?>(Logout)</a></li>
				</ul>
</div>
