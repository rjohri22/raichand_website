<?php
// include("config.php");
include("../../dbcon.php");

 $new_id= $_GET['id'];

$sql = "DELETE FROM policies WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("location: ".SITEURL."/admin/policies/");

mysqli_close($con);
?>
