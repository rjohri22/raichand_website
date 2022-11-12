<?php

$host = $_SERVER['HTTP_HOST'];
$con = "";
 

//    $con = mysqli_connect('localhost', 'raichand_website_user', 'raichand@2022', 'raichand_website') or die('not connected kk'); 
   
   $con = mysqli_connect('localhost', 'root', '', 'raichand_website') or die('not connected kk'); 
   
//  $con = mysqli_connect('103.171.44.213','websitedb','Sub@2019','websitedb') or die('not connected');

function getSiteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'] . '/raichand_website';
    return $protocol . $domainName;
}
define('SITEURL', getSiteURL());

  

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}


define("EMAIL_USERNAME",""); 
define("EMAIL_PASSWORD","");
define("EMAIL_FROMMAIL","");
define("EMAIL_FROMNAME","");

