<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 19.01.2018
 * Time: 14:18
 */
// nõuame konfiguratsiooni faili
require_once  'conf.php';

// loome peamalli objekti
$mainTmpl = new template('main');
require_once 'control.php';
// reaalväärtuste määramine
$mainTmpl->set('site_lang', 'et');
$mainTmpl->set('site_title', 'PV');
$mainTmpl->set('user', 'Kasutaja');
$mainTmpl->set('title', 'Pealkiri');
$mainTmpl->set('lang_bar', 'Keeleriba');
require_once 'menu.php';

// väljastame objekti sisu test kujul
/*echo '<pre>';
print_r($mainTmpl);
echo '</pre>';
echo $mainTmpl->parse();*/
// väljastame sisuga täidetud malli
echo $mainTmpl->parse();
/*// kontrollime $http objekti tööd
echo HTTP_HOST.SCRIPT_NAME.'<br />';
ECHO $http->baseLink.'<br />';
$pairs = array('control'=>'login', 'user'=>'test');
$link = $http->getLink($pairs);
echo $link;*/