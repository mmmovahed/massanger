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




