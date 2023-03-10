<?php
    ini_set('display_errors','on');//on or off
    error_reporting(-1);//0 or -1
    //ob_start();
    //session_start();
    date_default_timezone_set('Asia/Tehran');
    require_once 'config.php';
    require_once 'helper/base.php';
    if(stristr($_SERVER['REQUEST_URI'],'/admin/'))
    {
        require_once 'helper/backend.php';
        $main = new Backend();
    }
    else
    {
        require_once 'helper/frontend.php';
        $main = new Frontend();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
</head>
<body>