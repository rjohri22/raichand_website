<?php
include("../../dbcon.php");

$new_id= $_GET['id'];

$sql = "DELETE FROM emailtemplate WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

header("location: ".SITEURL."/admin/emailtemplate/");

mysqli_close($con);
?>
