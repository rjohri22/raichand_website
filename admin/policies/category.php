<?php include '../sidebar.php';
include("../../dbcon.php");?>

<?php
//  include("config.php");

 $bname= $filename= $msg="";

 if (isset($_POST["submit"]))
  {

  	$bname = $_POST['bname'];
 	 $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "image/".$bname.'.png';
        $filenamedb = $bname.'.png';

 	$sql = "INSERT INTO bname_category(bname, filename) VALUES	('$bname','$filenamedb')";

 	 $row = $con->query($sql);
        if ($row) {
            echo "<script>alert('Category added successfully')</script>";
            echo "<script>window.location.href='".SITE_URL."admin/policies/cindex.php';</script>";
            // echo "<script>window.location.href='/admin/policies/cindex.php';</script>";

			// header("location: /admin/policies/cindex.php");
        }else
        {

        }

         if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
    }
 }

?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Policies</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Policies</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
	<form method="POST" action="#" enctype ="multipart/form-data">
		<div class="container" style="margin-top: 20px" >
			<div class="row">
				<div class="col-md-8">
				<label for="bname">Business name:</label><br>
				<input type="text" class="form-control" name="bname" required><br>
				<div class="mb-3">
			<label for="formFileSm" class="form-label">Upload file:</label>
  <input class="form-control form-control-sm" name="uploadfile" id="formFileSm" type="file" required><br>
</div>
				 <input type="submit"class="btn btn-success" name="submit" value="Submit">
				</div></div>
		</div>

</form>

</div>
</div>

    <?php include '../footer.php';?>