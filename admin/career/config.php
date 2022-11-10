<?php

$host = $_SERVER['HTTP_HOST'];
$con = "";
if ($host == "http://local.raichandgroup.com" or $host == "local.raichandgroup.com") {    
    //do anything you want to do 
    $con = mysqli_connect('localhost', 'root', '', 'raichand');
} else if ($host == 'https://raichandgroup.com' or $host == 'www.raichandgroup.com' or $host == 'raichandgroup.com') {
    $con = mysqli_connect('103.171.44.213', 'websitedb', 'Sub@2019', 'websitedb') or die('not connected');
}else if($host == 'raichandgroup.thevitalscience.com'){
    $con = mysqli_connect('localhost', 'thevital_test_user', '!B}kekXa@&v%', 'thevital_raichandgroup') or die('not connected');    
}
//  $con = mysqli_connect('103.171.44.213','websitedb','Sub@2019','websitedb') or die('not connected');


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
