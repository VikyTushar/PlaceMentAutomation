<?php
     include("my_db.php");
     $sql = "SELECT notice FROM news_notice ORDER BY nid DESC";
     $result=mysqli_query($con,$sql);
     //$row = mysqli_fetch_array($result);
     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
     {
      echo $row['notice']."<br>";
     }
mysqli_close($con);
?>