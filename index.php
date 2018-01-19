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

// väljastame objekti sisu test kujul
echo '<pre>';
print_r($mainTmpl);
echo '</pre>';