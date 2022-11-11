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

