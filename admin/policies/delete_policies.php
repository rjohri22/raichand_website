<?php
// include("config.php");
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM bname_category WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("Location:".SITEURL."/admin/policies/cindex.php");

mysqli_close($con);
?>
