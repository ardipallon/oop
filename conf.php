<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 18.01.2018
 * Time: 09:36
 */
// konfiguratsiooni fail

// loome vajalikud abikonstandid
define('MODEL_DIR', 'model/');
define('VIEWS_DIR', 'views/');
define('CONTROL_DIR', 'controllers/');
define('LIB_DIR', 'lib/');

// lisame vaikimisi kontrolleri faili nimi
define('DEFAUL_CONTROL', 'default');

require_once LIB_DIR.'utilis.php';

// nõuame vajalikke failide olemasolu
require_once MODEL_DIR.'template.php'; // html vaade failide töötlus
require_once MODEL_DIR.'http.php'; // HTTP töötlus klass
require_once MODEL_DIR.'linkobjekt.php';
// loome vajalikud objektid, mis on pidevalt töös
$http = new linkobjekt();