<?php
defined('DB_HOST') or die;
abstract class Base
{

    protected $dbLink = null;

    public function __construct()
    {

    }


    public function __destruct()
    {
    }


    public function getMysqlError()
    {
    }

    public function query($q)
    {
    }


}