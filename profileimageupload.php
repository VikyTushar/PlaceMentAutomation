<?php
$id=$_GET['id'];
echo "<h3>Image Upload</h3>";
echo "<form action='uploadimage.php' method='POST' enctype='multipart/form-data'>	
	<input type='file' name='file' accept='image/*'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' name='submit' value='Upload'>";
echo"</form>";
?>
