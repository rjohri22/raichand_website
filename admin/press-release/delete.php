
<?php 
include("../../dbcon.php");

if(isset($_GET['deleteid']))
	{
		$selectSql = "SELECT * FROM press_release WHERE id = ".$_GET['deleteid'];
		$rsSelect = mysqli_query($con,$selectSql);
		$getRow = mysqli_fetch_assoc($rsSelect);
		$deleteSql = "DELETE FROM press_release WHERE id = ".$getRow['id'];
		$rsDelete = mysqli_query($con, $deleteSql);	
		
		$getIamgeName = $getRow['file_size'];
		
		$createDeletePath = "uploads/".$getIamgeName;
		
		unlink($createDeletePath);
		
		header('location: <?php echo SITE_URL;?>admin/press-release/');
		
		
	}
?>
 