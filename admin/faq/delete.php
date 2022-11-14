
<?php
include("../../dbcon.php"); 
// Process delete operation after confirmation
if(!empty($_GET["id"])){
    
    $param_id = trim($_GET["id"]);
 
    // Prepare a delete statement
    $sql = "DELETE FROM faq WHERE id = ".$param_id;
    
    if($stmt = mysqli_query($con, $sql)){
        // Records deleted successfully. Redirect to landing page
        header("Location: ".SITEURL."/admin/faq/");
        exit();    
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
