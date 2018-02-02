<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 02.02.2018
 * Time: 08:57
 */

class mysql
{
    // klassi väljad
    var $conn = false; // Ühendus db serveriga
    var $host = false; // db server
    var $user = false; // db server user
    var $pass = false; // db server kasutaja parool
    var $dbname = false;

    /**
     * mysql constructor.
     * @param bool $conn
     */
    public function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connect();
    }

    function connect($host, $user, $pass, $dbname){
        $this->conn = mysqli_connect($host, $user, $pass, $dbname);
        if(!$this->conn){
            echo 'Probleem andmebaasi ühendusega<br />';
            exit;
        }
    }
}