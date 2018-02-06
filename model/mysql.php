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

    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if($this->conn == false){
            echo 'Probleem andmebaasi ühendusega<br />';
            exit;
        }
    }
    // Päringu saatmise funktsioon
    function query($sql){
        $result = mysqli_query($this->conn, $sql);
        if(!$result){
            echo 'Probleem päringuga '.$sql.'<br />';
            return false;
        }
        return $result;
    }

    // andmete lugemine
    function getData($sql)
    {
        $result = $this->query($sql); // saadame päringu andmebaasi
        $data = array(); // Päringu andmete salvestamiseks
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row; // loeme ridade kaupa
        }
        // kui probleem andmetega
        if (count($data) == 0) {
            return false;
        }
        return $data;
    }
}