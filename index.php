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

echo $mainTmpl->parse();
echo '<pre>';
print_r($http->vars);
echo '</pre>';

$hetkeKell = $db->getData('SELECT NOW()');

echo '<pre>';
print_r($hetkeKell);
echo '</pre>';