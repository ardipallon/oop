<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 24.01.2018
 * Time: 09:16
 */

class linkobjekt extends http
{
    // klassi muutujad/väljad
    var $baseLink = false; // põhilink
    var $protocol = 'http://'; // HTTP protokoll
    var $eq = '='; // =
    var $delim = '&amp;'; // &

    /**
     * linkobjekt constructor.
     */
    public function __construct()
    {
        parent::__construct(); // kõigepealt defineerime vajalikud eelandmed
        $this->baseLink = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }
    // moodustame paarid kujul nimi=väärtus
    // ja ühendame paarid omavahel kujul:
    // nimi1=vaartus&nimi2=vaartus2 jne
    function addToLink(&$link, $name, $value){
        if($link != '') {
            $link = $link.$this->delim;
        }
        $link = $link.$name.$this->eq.fixURL($value);
        echo $link.'<br />';
    }
    function getLink($add = array()){
        $link = '';
        foreach($add as $name=>$value){
            $this->addToLink($link, $name, $value);
        }
        if($link != ''){
            $this->baseLink = $this->baseLink.'?'.$link;
        } else {
            $this->baseLink;
        }
        return $link;
    }
}
