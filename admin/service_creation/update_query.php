<?php

include "../../dbcon.php" ;

// print_r($_POST);exit;
// if(isset($_POST['anajan'])){
    // $sql = "SELECT * FROM `categories`";
    // $sql = "SELECT * FROM `categories`";
    // $result = mysqli_query($con, $sql);
    
// echo "dgdfgdfgd";exit;

if(isset($_POST['submit'])){
    
    $id=$_POST['id'];
    //  echo $id;exit;
    $service_title=$_POST['service_title'];
    $service_url=$_POST['service_url'];
    $category=$_POST['category'];
    $short_des=$_POST['short_des'];
    // $tinymceeditor=$_POST['tinymceeditor'];

    $tinymceeditor = stripslashes($_POST['tinymceeditor']);//get data from textarea tiny MCE editorcvhu0tu

    $tag=$_POST['tag'];
    $categories=$_POST['categories'];
    // print_r($categories);exit;
    $category_list="";
    foreach($categories as $cat)
    {
        $category_list .= $cat.",";
    }
    // echo $hob;exit;
    
    // print_r($hob);exit;
    $date = date('Y-m-d H:i:s');
    // $target_dir = "/uploadimg"; //Directory Name

    $upload_image=$_FILES["image"]["name"];
    $temp_name = $_FILES["image"]["tmp_name"];

    $existing_image = $_POST["existing_image"];

    $upload_image_detail=$_FILES["image_detail"]["name"];
    $temp_name_detail = $_FILES["image_detail"]["tmp_name"];
    $existing_image_detail = $_POST["existing_image_detail"];

    // $upload_image=$_FILES["existing_img"]["name"];
    // echo $temp_name = $_FILES["existing_img"]["tmp_name"];exit;

    if($upload_image == ""){
        $q = "UPDATE `service` SET `service_title`='$service_title',`service_url`='$service_url',`category`='$category',
        `cat_f`='$category_list', `modify`='$date',`short_description`='$short_des',`long_description`='$tinymceeditor',
        `tag`='$tag' WHERE `id`='$id'";
        }
    else{
        // echo "else";exit;
        move_uploaded_file($temp_name,  $_SERVER['DOCUMENT_ROOT'].'/'.'uploadimg/'.$_FILES["image"]["name"]);
        $q = "UPDATE `service` SET `service_title`='$service_title',`service_url`='$service_url',`category`='$category',
        `cat_f`='$category_list',`modify`='$date',`short_description`='$short_des',`long_description`='$tinymceeditor',`images`='$upload_image',
        `tag`='$tag' WHERE `id`='$id'";
    }
    
    
    // $filename=$_FILES['image']['name'];
//    print_r($_FILES["image"]);exit;
    // print_r($filename);exit;
//     $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
//     $extensions_arr = array("jpg","jpeg","png","gif");
//     if( in_array($imageFileType,$extensions_arr) ){     
// echo $_FILES["image"]["tmp_name"];exit;
 
//         // Upload files and store in database
//         if(move_uploaded_file($_FILES["image"]["tmp_name"],'uploadimg/'.$filename)){
//            echo "er"; exit;
//         }}
    // $q="INSERT INTO `service` (`service_title`, `service_url`, `category`,`modify`,`short_description`,
    // `long_description`,`images`,`tag`) VALUES ('$service_title','$service_url','$category','$date',
    // '$short_des','$tinymceeditor','$upload_image','$tag')";
     
    $query=mysqli_query($con,$q);      

}

header("Location: ".SITEURL."admin/service_creation");
exit();



?>