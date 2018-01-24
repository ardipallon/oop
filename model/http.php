<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 24.01.2018
 * Time: 08:41
 */

class http
{
    //klassi muutujad
    var $vars = array(); // andmed mis jõuavad HHTP kaudu
    var $server = array();

    /**
     * http constructor.
     */
    public function __construct()
    {
        $this->init();
        $this->initConst();
    }

    // serveriga seotud andmed

    // klassi muutujate väärtustega täitmine
    function init(){
        // nüüd on olemas kõik andmed, mis serverile jõudnud
        $this->vars = array_merge($_GET, $_POST);
        // serveri andmed
        $this->server = $_SERVER;
    }

    // vajalike konstantide defineerimine
    function initConst(){
        $constNames = array('HTTP_HOST', 'SCRIPT_NAME');
        foreach($constNames as $constName){
            if(!defined($constName) and isset($this->server[$constName])){
                define[$constName, $this->server[$constName]];
            }
        }
    }
}