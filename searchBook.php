<?php
$q=$_GET["q"];//get the q parameter from URL
require 'connection.php';
$r = mysqli_query($con, "select * from book where b_id like'%".$b_id."%' " ) ;
echo "<TABLE border=4>";
 while($row = mysqli_fetch_array($r) ) {
      echo "<TR><td>".$row['b_id']."</td>";
	  echo "<td>".$row['booksname']."</td>";
	  echo "<td>".$row['authorname']."</td> ";
 }  	
echo"<TABLE>";
 mysqli_close($con);
 
?>