<?php

 $servername= "103.171.44.213";
 $username = "websitedb";
 $password = "Sub@2019";
 $database = "websitedb";


 $con = mysqli_connect( $servername, $username, $password, $database);

 if (!$con)
  {
 	die( "connection failed: " . mysqli_connect_error());
 }
?>