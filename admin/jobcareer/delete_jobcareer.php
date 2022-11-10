<?php
include("config.php");

$new_id= $_GET['id'];
// echo $new_id;exit;

$sql = "DELETE FROM jobcareer WHERE id = {$new_id}";

$result = mysqli_query($con, $sql) or die(" Query unsuccessful.");

//header("location: /trg-portal/invester/careerindex.php");
?>
<script>
    window.location.href = "jobindex.php";
</script>
<?php

mysqli_close($con);
?>
