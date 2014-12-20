<?php

include("2nd.php");

require("db/db.php");

$result = mysqli_query($con, "SELECT * FROM comment_box ORDER BY id DESC");

while($row=mysqli_fetch_array($result)){

echo "<div class='comments_content'>";

echo "<name>" . $row['name'] . "</name>";

/*if("admin" == $user_name )
{
	echo "<h14><a href='delete.php?id=" . $row['id'] . "'> X</a></h14>";
}*/
if($user_name == $row['name'] ||"admin" == $user_name )
{
	echo "<h14><a href='delete.php?id=" . $row['id'] . "'> X</a></h14>";
}

echo "<h12>" . $row['date_publish'] . "</h12></br></br>";

echo "<h13>" . $row['comments'] . "</h13></br></br>";

echo "</div>";

}

mysqli_close($con);



?>