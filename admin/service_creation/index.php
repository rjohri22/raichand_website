<?php 
include '../sidebar.php'; ?>
<?php
include "../../dbcon.php";

$sql = "SELECT * FROM service WHERE `is_del` = 0 ";
// $queryServices =  $con->query("SELECT * FROM `cat`");
//                                         if ($queryServices->num_rows > 0) {
//                                             while ($rowServices = $queryServices->fetch_assoc()) {                                                
//                                                 $childCat = array_filter(explode(',', $rowServices['categories']));                                                                                      
//                                                 // print_r($childCat); exit;
//                                             }
//                                         }
$result = mysqli_query($con, $sql);

// $result = $con->query($sql);

?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Service Creation</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">Serive Creation</a></li>
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
                            <h3 class="box-title">Service Creation</h3>
                        </div>
                        <!-- <div class="d-flex"> -->

                            <!-- <div class="col-md-6" align="left">
                                <a href="cindex.php"><button type="button" class="btn btn-primary btn-sm">CREATE</button></a>
                            </div> -->
                            <div class="col-md-6" align="right">
                                <a href="service_add.php"><button type="button" class="btn btn-dark">ADD</button></a>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Sr.No</th>
                                    <th class="border-top-0">Service Title</th>
                                    <th class="border-top-0">Service Url</th>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Modify</th>
                                    <!-- <th class="border-top-0">Short Des</th> -->
                                    <!-- <th class="border-top-0">Long Des</th> -->
                                    <th class="border-top-0">Images</th>

                                    <th class="border-top-0">Image Detail</th>

                                    <th class="border-top-0">Tag</th>
                                    <th class="border-top-0">Categories</th>
                                    <th class="border-top-0" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                // print_r($result);exit;
                                if ($result->num_rows > 0) {
                                    $count = 0;
                                    while ($row = $result->fetch_assoc()) {
                                        $count ++;
                                ?>

                                        <tr>

                                            <td><?= $count; ?></td>
                                            <td><?= $row['service_title']; ?></td>
                                            <td><?= $row['service_url']; ?></td>
                                            <td><?= $row['category']; ?></td>
                                            <td><?= $row['modify']; ?></td>
                                            <!-- <td><?= $row['short_description']; ?></td> -->
                                            <!-- <td><?= $row['long_description']; ?></td> -->
                                            <td><img src="<?= '/uploadimg'.'/'.$row['images']; ?>" alt="" hight="50px" width="50px"></td>

                                            <td><img src="<?= '/uploadimg'.'/'.$row['image_detail']; ?>" alt="" hight="50px" width="50px"></td>

                                            <td><?= $row['tag']; ?></td>
                                            <td><?= $row['cat_f']; ?></td>
                                            <td>
                                            <!-- <input type="submit" class="btn btn-success" name="submit" value="submit"></input> -->

                                                <a href="update.php?edit_id=<?= $row['id']; ?>" name="anajan"><button type="button" class="btn btn-warning ">Edit</button></a>
                                                <a onclick="return confirm('are you sure?')" href="delete.php?delete_id=<?= $row['id']; ?>" id="<?php ?>"><button type="button" class="btn btn-warning">Delete</button></a>
                                            </td>



                                        </tr>
                                <?php
                                }
                                   
                                } else {
                                    echo "0 results";
                                }
                                // mysqli_close($conn);
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php'; ?>