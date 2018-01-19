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
// reaalväärtuste määramine
$mainTmpl->set('site_lang', 'et');
$mainTmpl->set('site_title', 'PV');
$mainTmpl->set('user', 'Kasutaja');
$mainTmpl->set('title', 'Pealkiri');
$mainTmpl->set('lang_bar', 'Keeleriba');
$mainTmpl->set('menu', 'Lehe menüü');
$mainTmpl->set('content', 'Lehe sisu');
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($mainTmpl);
echo '</pre>';