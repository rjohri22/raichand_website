<?php
 //session_start();
include('header.php');
if (isset($_POST['submit-form'])) {
    $unm = $_POST['username'];
    $pass = $_POST['password'];
    if ($unm == 'Raichand0810' && $pass = 'Modern@123') {
  
        $_SESSION['verify'] = 'true';
        $_SESSION['password'] = 'true';
        header('location:' . SITE_URL . '/admin');
?>
        <?php
        echo "<script>window.location.href='".SITE_URL."/admin';</script>";
        exit;
        ?>
<?php
    } else {
        // echo("");
        $_SESSION['password'] = 'false';
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/login.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css/font-awesome.min.css" type="text/css" media="all">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="box">

        <!-- form section start -->
        <section class="w3l-hotair-form">
            <h1></h1>
            <div class="container">
                <?php
                if (isset($_SESSION['password']) && $_SESSION['password'] == 'false') {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                              Wrong Auth
                            </div>
                          </div>';
                }
                ?>
                <!-- /form -->
                <div class="workinghny-form-grid">
                    <div class="main-hotair">
                        <div class="w3l_form align-self">
                            <div class="left_grid_info">
                                <img src="<?php echo SITE_URL; ?>/assets/images/1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="content-wthree">

                            <center><a href="https://raichandgroup.thevitalscience.com/"><img src="assets/images/black-logos.png" style="height:50px;"></a></center>

                            <h2>Developer Log In</h2>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <input type="text" class="text" name="username" placeholder="User Name" required="" autofocus>
                                <input type="password" class="password" name="password" placeholder="User Password" required="" autofocus>
                              <button class="theme-btn btn-style-one mb-30" type="submit" name="submit-form" ><span class="btn-title">Log In</span></button>
                            </form>

                            <a href="forgot.php"><button>Forgot Password</button></a>

                        </div>

                    </div>
                </div>
                <!-- //form -->
            </div>
            <!-- copyright-->
            <div class="copyright text-center">
                <p class="copy-footer-29">© 2022 All rights reserved. RAICHAND and its logo are
                    trademarks of The Raichand Group.
                </p>
            </div>
            <!-- //copyright-->
        </section>
        <!-- //form section start -->
    </div>
</body>

</html>