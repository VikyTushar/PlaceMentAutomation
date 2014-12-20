<?php
      include(".2nd.php");
      if(!isset($_SESSION['username']))
      {
             $query_string="?error=You are not logged In!";
             $server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
             $next_page = 'index.php';
             header('Location: http://'.$server_dir.$next_page.$query_string);

      }

?>

<!doctype html>
<html>
<head>
   <meta http-equiv="content-type" content="text/html;charset="UTF-8">
   <link rel="shortcut icon" href="./.favicon.ico">
   <title>Training And Placement</title>
   <link rel="stylesheet" href="./.style.css" type="text/css">
   <script src="./.sorttable.js"></script>
   <script type="text/javascript" src=".js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src=".js/menu.js"></script>
	<script type="text/javascript" src=".js/slideshow.js"></script>
	<script type="text/javascript" src=".js/cufon-yui.js"></script>
	<script type="text/javascript" src=".js/Arial.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,#menu,#copy,.blog-date');
	</script>
	<script type="text/javascript" src=".js/fancyzoom.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('div.photo a').fancyZoom({directory: 'images/zoom', scaleImg: true, closeOnClick: true});
		});
	</script>
	<!--<link rel="stylesheet" href="css/main.css" type="text/css" /-->
</head>
<body>
<div id="bg">
		<div class="wrap">

			<!-- logo -->
			<h11><a href="home.php">KitCoek</a></h11>
			<!-- /logo -->

			<!-- menu -->
			<?php  include(".master2.php") ?>			<!-- /menu -->

			<!-- pitch -->
			<div id="pitch">
				<div id="slideshow">

					<!-- 1st frame -->
					<div class="active">
						<img src=".images1/pitch/pitch1.jpg" alt="" />
						<div class="overlay transparent">
							<h2>Professional Approach</h2>
							<p>We take care of our valuable students for their bright career.</p>
						</div>
						<!--<p class="arrow"><a href="#"></a></p>-->
					</div>
					<!-- /1st frame -->

					<!-- 2nd frame -->
					<div>
						<img src=".images1/pitch/pitch2.jpg" alt="" />
						<div class="overlay transparent">
							<h2>Precise Methods</h2>
							<p>Just automation</p>
						</div>
						<!--<p class="arrow"><a href="#"></a></p>-->
					</div>
					<!-- /2nd frame -->

					<!-- 3rd frame -->
					<div>
						<img src=".images1/pitch/pitch3.jpg" alt="" />
						<div class="overlay transparent">
							<h2>Mesurable Results</h2>
							<p>We have 100% placement in the year 2013-14.</p>
						</div>
						<!--<p class="arrow"><a href="#"></a></p>-->
					</div>
					<!-- 3rd frame -->

				</div>
			</div>
			<!-- /pitch -->

<div id="container">
	<h1>Directory Contents</h1>

	<table class="sortable">
	    <thead>
		<tr>
			<th>Filename</th>
			<th>Type</th>
			<th>Size</th>
			<th>Date Modified</th>
		</tr>
	    </thead>
	    <tbody><?php

	// Adds pretty filesizes
	function pretty_filesize($file) {
		$size=filesize($file);
		if($size<1024){$size=$size." Bytes";}
		elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
		elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
		else{$size=round($size/1073741824, 1)." GB";}
		return $size;
	}

 	// Checks to see if veiwing hidden files is enabled
	if($_SERVER['QUERY_STRING']=="hidden")
	{$hide="";
	 $ahref="./";
	 $atext="Hide";}
	else
	{$hide=".";
	 $ahref="./?hidden";
	 $atext="Show";}

	 // Opens directory
	 $myDirectory=opendir(".");

	// Gets each entry
	while($entryName=readdir($myDirectory)) {
	   $dirArray[]=$entryName;
	}

	// Closes directory
	closedir($myDirectory);

	// Counts elements in array
	$indexCount=count($dirArray);

	// Sorts files
	sort($dirArray);

	// Loops through the array of files
	for($index=0; $index < $indexCount; $index++) {

	// Decides if hidden files should be displayed, based on query above.
	    if(substr("$dirArray[$index]", 0, 1)!=$hide) {

	// Resets Variables
		$favicon="";
		$class="file";

	// Gets File Names
		$name=$dirArray[$index];
		$namehref=$dirArray[$index];

	// Gets Date Modified
		$modtime=date("M j Y g:i A", filemtime($dirArray[$index]));
		$timekey=date("YmdHis", filemtime($dirArray[$index]));


	// Separates directories, and performs operations on those directories
		if(is_dir($dirArray[$index]))
		{
				$extn="&lt;Directory&gt;";
				$size="&lt;Directory&gt;";
				$sizekey="0";
				$class="dir";

			// Gets favicon.ico, and displays it, only if it exists.
				if(file_exists("$namehref/favicon.ico"))
					{
						$favicon=" style='background-image:url($namehref/favicon.ico);'";
						$extn="&lt;Website&gt;";
					}

			// Cleans up . and .. directories
				if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;"; $favicon=" style='background-image:url($namehref/.favicon.ico);'";}
				if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
		}

	// File-only operations
		else{
			// Gets file extension
			$extn=pathinfo($dirArray[$index], PATHINFO_EXTENSION);

			// Prettifies file type
			switch ($extn){
				case "png": $extn="PNG Image"; break;
				case "jpg": $extn="JPEG Image"; break;
				case "jpeg": $extn="JPEG Image"; break;
				case "svg": $extn="SVG Image"; break;
				case "gif": $extn="GIF Image"; break;
				case "ico": $extn="Windows Icon"; break;

				case "txt": $extn="Text File"; break;
				case "log": $extn="Log File"; break;
				case "htm": $extn="HTML File"; break;
				case "html": $extn="HTML File"; break;
				case "xhtml": $extn="HTML File"; break;
				case "shtml": $extn="HTML File"; break;
				case "php": $extn="PHP Script"; break;
				case "js": $extn="Javascript File"; break;
				case "css": $extn="Stylesheet"; break;

				case "pdf": $extn="PDF Document"; break;
				case "xls": $extn="Spreadsheet"; break;
				case "xlsx": $extn="Spreadsheet"; break;
				case "doc": $extn="Microsoft Word Document"; break;
				case "docx": $extn="Microsoft Word Document"; break;

				case "zip": $extn="ZIP Archive"; break;
				case "htaccess": $extn="Apache Config File"; break;
				case "exe": $extn="Windows Executable"; break;

				default: if($extn!=""){$extn=strtoupper($extn)." File";} else{$extn="Unknown";} break;
			}

			// Gets and cleans up file size
				$size=pretty_filesize($dirArray[$index]);
				$sizekey=filesize($dirArray[$index]);
		}

	// Output
	 echo("
		<tr class='$class'>
			<td><a href='./$namehref'$favicon class='name'>$name</a></td>
			<td><a href='./$namehref'>$extn</a></td>
			<td sorttable_customkey='$sizekey'><a href='./$namehref'>$size</a></td>
			<td sorttable_customkey='$timekey'><a href='./$namehref'>$modtime</a></td>
		</tr>");
	   }
	}
	?>

	    </tbody>
	</table>
</div>
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
