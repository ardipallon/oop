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
}
