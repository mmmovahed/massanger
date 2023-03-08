<?php
defined('DB_HOST') or die;
abstract class Base
{

    protected $dbLink = null;

    public function __construct()
    {
        $this->dbLink = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD)
                or die(mysqli_connect_error());

        mysqli_select_db($this->dbLink,DB_NAME)
            or die($this->getMysqlError());

        $this->query("SET NAMES 'UTF8'");

    }


    public function __destruct()
    {
        if($this->dbLink)
            mysqli_close($this->dbLink);
    }


    public function getMysqlError()
    {
        return mysqli_error($this->dbLink);
    }

    public function query($q)
    {
        mysqli_query($this->dbLink,$q);
    }


}