<?php session_start();
function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'] . '/raichand_website';
    return $protocol . $domainName;
}
define('SITE_URL', siteURL());

$site_url= siteURL(); 
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RAICHAND: The Raichand Group</title>
    <link href="<?php echo $site_url ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $site_url;  ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $site_url;  ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo $site_url;  ?>/assets/css/color-3.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $site_url;  ?>/assets/images/favicon-v3.png" type="image/x-icon">
    <link rel="icon" href="<?php echo $site_url;  ?>/assets/images/favicon-v3.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?php echo $site_url;  ?>/assets/css/main.css" rel="stylesheet">
    <link href="<?php echo $site_url;  ?>/assets/css/custom.css" rel="stylesheet">

    <!-- Mobile Number -->
    <link rel="stylesheet" href="intl-tel-input-master/build/css/intlTelInput.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Google reCAPTCHA CDN -->
    <script src="https://www.google.com/recaptcha/api.js" async defer>
    </script>
</head>

<body onscroll="myFunction()">
    <div class="page-wrapper" >
        <div class="wrapper" >
              <div id="menubar">
            <nav id="sidebar" >
            
                <div class="sidebar-header p-0" >
                    <div class="container-fluid p-0" >
                        
                        <div class="row m-0" style="display:block;">

                            <img src="<?php echo $site_url;  ?>/assets/images/logo/sidebar-logo.png" class="side-logo" style="height:78px;">
                            <div class="col-4 p-4 close align-self-center" id="sidebarClose">
                                <a class="close w-100 text-center">
                                    <i class="material-icons">close</i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-body">
                    <ul class="list-unstyled components">
                        <li>
                            <a href="index.php" class="">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.php" class="">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="services.php" class="">
                                Our Services
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-submenu open-submenu" data-submenu=".menu1">
                                Our Businesses
                                <i class="material-icons">chevron_right</i>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" class="">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <ul class="list-submenu list-unstyled menu1">
                        <li class="active">
                            <a href="#" class="link-submenu submenu-back" data-submenu=".menu1"><i class="material-icons">chevron_left</i> The Raichand Group</a>
                        </li>
                        <li>
                        <li>
                            <a href="business/management.php">Management</a>
                        </li>
                        <li>
                            <a href="business/trading.php">Trading</a>
                        </li>
                        <li>
                            <a href="business/investments.php">Investments</a>
                        </li>
                        <li>
                            <a href="business/merchandise.php">Merchandise</a>
                        </li>
                        <li>
                            <a href="business/hospitality.php">Hospitality</a>
                        </li>
                        <li>
                            <a href="business/entertainment.php">Entertainment</a>
                        </li>
                        <li>
                            <a href="business/foundation.php">Foundation</a>
                        </li>
                        <li>
                            <a href="business/healthcare.php">Healthcare</a>
                        </li>
                        <li>
                            <a href="business/school-of-arts.php">School of Arts</a>
                        </li>
                        <li>
                            <a href="business/publishers.php">Publishers</a>
                        </li>
                    </ul>
                </div>

                <!--<div class="sidebar-footer">-->
                <!--    <ul class="list-unstyled components mt-70">-->
                <!--        <li>-->
                <!--            <a href="mailto:writeus@raichandgroup.com"><i class="fa fa-envelope" aria-hidden="true"></i> writeus@raichandgroup.com</a>-->
                <!--        </li>-->

                <!--    </ul>-->
                <!--</div>-->
            </nav>
</div>

            <div id="content">
                <nav id="navbarMain" class="navbar navbar-main fixed-top navbar-expand-lg bg-transparent p-0 navbar-light">
                    <div class="navbar-sidebar-menu" onclick="load()">
                        <a id="sidebarCollapse" class="justify-content-center align-items-center d-flex">
                            <img src="<?php echo $site_url;  ?>/assets/images/icons/menu.svg" alt=" " > 
                        </a>
                    </div>
                    <a class="navbar-brand ml-5" href="<?php echo SITE_URL;?>">
                        <img src="<?php echo $site_url;  ?>/assets/images/logo/footerlogo.png" alt="raichand Logo">
                    </a>
                    <div class="container-fluid">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="https://webmail.raichandgroup.com/"><button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Personnel Login"> <i class="fa fa-envelope" aria-hidden="true"></i></button></a>
                            </li>&nbsp;
                            <li class="nav-item">
                                <a href="<?php echo SITE_URL;?>login.php"><button type="button" class="btn btn-dark"> <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="right-sidebard">
                    <a href="https://www.facebook.com/GroupRaichand" target="_blank">
                        <span class="fab fa-facebook-f social-icon facebook-icon"></span>
                    </a>

                    <a href="https://www.instagram.com/groupraichand/" target="_blank">
                        <i class='fab fa-instagram social-icon instagram-icon'></i>
                    </a>

                    <a href="https://twitter.com/GroupRaichand" target="_blank">
                        <i class='fab fa-twitter-square social-icon twitter-icon'></i>
                    </a>

                    <a href="https://www.linkedin.com/company/groupraichand" target="_blank">
                        <i class='fab fa-linkedin social-icon linkedin-icon'></i>
                    </a>

                    <a href="https://www.youtube.com/channel/UCTeBTDrTnAZLXooIskScFxg" target="_blank">
                        <i class='fab fa-youtube social-icon youtube-icon'></i>
                    </a>

                    <a href="https://www.pinterest.com/groupraichand/" target="_blank">
                        <i class='fab fa-pinterest social-icon youtube-icon'></i>
                    </a>

                    <a href="https://t.me/groupraichand" target="_blank">
                        <span class="fab fa-telegram social-icon facebook-icon"></span>
                    </a>
                </div>
                
                
                
    <script>
    function myFunction()
    {
        document.getElementById('menubar').style.display='none';
    }
function load()
{
 document.getElementById('menubar').style.display='block';
    
}

</script>            

                
                