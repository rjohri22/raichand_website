<?php include '../sidebar.php'; ?>

<?php
include("../../dbcon.php");

$title = $content = $activeinactive = "";

if (isset($_POST['submit'])) {
    $title = $_POST["title"];
    $Content = $_POST['content'];
    $activeinactive = $_POST["is_active"];
    $email_type = $_POST["email_type"];
    //echo $email_type; exit;

    $sql = "INSERT INTO `emailtemplate` (`title`, `Content`,`email-type`, `is_active`) VALUES ('$title','$Content','$email_type','$activeinactive')";
    $row = $con->query($sql);
    if ($row) {

?>
    <script type="text/javascript">
        window.location.href = "index.php";
    </script>

<?php
        
    } else {
        echo "Data not posted" . $sql;
    }
}
?>

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Email Template</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">E-mail Template</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Email Template</h3>
                        </div>
                        <div class="d-flex">

                            <!-- <div class="col-md-6" align="left">
                            <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                        </div> -->
                            <div class="col-md-6" align="right" style="width: 100%;">
                                <a href="add.php"><button type="button" class="btn btn-dark">ADD</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Title</th>
                                    <th class="border-top-0">Email Type</th>

                                    <th class=" "> Is_active </th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $sql = "SELECT * FROM emailtemplate ORDER BY id DESC";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['email-type']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['is_active'] == 1) {
                                                echo "active";
                                            } else {
                                                echo "inactive";
                                            }
                                            ?>
                                        <td><a class="btn btn-warning text-white" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

                                            <a class="btn btn-warning text-white" onclick="//return confirm('are you sure you wont to update?')" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        </td>
                                    </tr>
                                <?php  }   }  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php';?>