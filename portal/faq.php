<?php session_start();
function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'] . '/raichand_website';
    return $protocol . $domainName;
}
define('SITE_URL', siteURL());

$site_url= siteURL(); 
 
include("../dbcon.php");
?>
<style>
    label {
        display: inline-block;
        margin-bottom: 0px !important;
    }
</style>
<section class="page-title" style="background-image: url(../assets/images/breadcrum/knowledge-base.png);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>FAQ</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo SITE_URL;?>index.php">Home</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="services-details" id="benifit&value">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#vendor" role="tab"
                            aria-controls="supplier" aria-selected="true">Vendors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#customer" role="tab" aria-controls="customer"
                            aria-selected="false">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#employee" role="tab" aria-controls="employee"
                            aria-selected="false">Personnels </a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="vendor" role="tabpanel" aria-labelledby="supplier-tab">
                        <div class="col-lg-12 col-md-12">
                            <div class="accordion">
                                <?php
                                    
                                    $q = "SELECT * FROM faq where `tag` = 'suppliers' order by order_num desc";
                                    $result = $con->query($q);
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        // print_r();
                                        echo '<div class="options">
                                                <input type="checkbox" id="togglesup'.$row['id'].'" class="toggle" />
                                                <label class="titles" for="togglesup'.$row['id'].'">
                                                    '.$row['question'].'
                                                </label>
                                                <div class="contents">
                                                    <p>'.$row['answer'].'</p>
                                                </div>
                                            </div>';
                                    }
                                ?>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                        <div class="col-lg-12 col-md-12">
                            <div class="accordion">
                                <?php
                               
                                    $q = "SELECT * FROM faq where `tag` = 'customers' order by order_num desc";
                                    $result = $con->query($q);
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        // print_r();
                                        echo '<div class="options">
                                                <input type="checkbox" id="togglecust'.$row['id'].'" class="toggle" />
                                                <label class="titles" for="togglecust'.$row['id'].'">
                                                    '.$row['question'].'
                                                </label>
                                                <div class="contents">
                                                    <p>'.$row['answer'].'</p>
                                                </div>
                                            </div>';
                                    }
                                ?>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="employee" role="tabpanel" aria-labelledby="employee-tab">
                        <div class="col-lg-12 col-md-12">
                            <div class="accordion">
                                 <?php

                                    $q = "SELECT * FROM faq where `tag` = 'personnels' order by order_num desc";
                                    $result = $con->query($q);
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        // print_r();
                                        echo '<div class="options">
                                                <input type="checkbox" id="toggleper'.$row['id'].'" class="toggle" />
                                                <label class="titles" for="toggleper'.$row['id'].'">
                                                    '.$row['question'].'
                                                </label>
                                                <div class="contents">
                                                    <p>'.$row['answer'].'</p>
                                                </div>
                                            </div>';
                                    }
                                ?>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include '../footer.php';?>