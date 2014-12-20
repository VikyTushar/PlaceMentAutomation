<?php
$id=$_POST['id'];
//file=$_GET['file'];
$folder = "images/";
include("stud_db.php");

			if ($_FILES["file"]["error"] > 0) {
				echo "Error: " . $_FILES["file"]["error"] . "<br>";
			}
		
			if (is_uploaded_file($_FILES['file']['tmp_name']))
			{
				if (move_uploaded_file($_FILES['file']['tmp_name'], $folder.$_FILES['file']['name']))
				 {
					$addr="images/".$_FILES['file']['name'];
					echo $addr;
					echo $id;
				

					mysqli_query ($con,"UPDATE `stud_db`.`stud_data` SET `addr` = '$addr' WHERE `stud_data`.`uid` = '$id'");
					//UPDATE `stud_db`.`stud_data` SET `addr` = 'Contact Us.jpg' WHERE `stud_data`.`uid` = 51;
					//$return=mysqli_query($connection,$query);
					//if(!$return)
					//die("query failed");
				 
					//$server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
					//goto confirmation page
					$next_page = 'localhost/tap/show_profile.php';
					header('Location:http://'.$server_dir.$next_page);
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
mysqli_close($con);
?>
