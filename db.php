<?php
$con =  mysqli_connect("localhost","root","","crud");
/*if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";
*/
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
