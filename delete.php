<?php
require("db/db.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($con,"DELETE FROM comment_box WHERE id='$id'");
header("location: forum.php");
}
mysqli_close($con);
?>