<?php
    ini_set('display_errors','on');//on or off
    error_reporting(-1);//0 or -1
    //ob_start();
    //session_start();
    date_default_timezone_set('Asia/Tehran');
    require_once 'config.php';
//    require_once 'helper/base.php';
    $date=date("Y-m-d--h:i:s");
//    echo $date;
//    if(stristr($_SERVER['REQUEST_URI'],'/admin/'))
//    {
//        require_once 'helper/backend.php';
//        $main = new Backend();
//        $title="Admin dashboard";
//    }
//    else
//    {
//        require_once 'helper/frontend.php';
//        $main = new Frontend();
//        $title="Be intouch";
//    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/styles-laptop.css">
    <link rel="icon" href="assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles-phone.css">
</head>
<body>