<?php
$folder = "C:/wamp/www/tap/downloads/";
if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 259264) . " kB<br>";
  echo "Stored in: " . $folder.$_FILES["file"]["tmp_name"];
  }
  	if (is_uploaded_file($_FILES['file']['tmp_name']))
	{
    	if (move_uploaded_file($_FILES['file']['tmp_name'], $folder.$_FILES['file']['name']))
    	 {
    	 $upload="File uploaded";
         $query_string="?files=".$upload;
         $query_string.= "&img=".$_FILES['file']['name'];
         $server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
		 //goto confirmation page
		 $next_page = 'adminpg.php';
		 header('Location:http://'.$server_dir.$next_page.$query_string);
    	 }
    	 else
    	 {
         echo "File not moved to destination folder. Check permissions";
    	 }
    }
    else
    {
     echo "File is not uploaded.";
	}


?>
