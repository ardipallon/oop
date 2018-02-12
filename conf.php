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
define('DEFAULT_CONTROL', 'default');

require_once LIB_DIR.'utilis.php';

// lisame rakenduse kasutatavate kasutajate rollid
define('ROLE_NONE', 0);
define('ROLE_USER', 1);
define('ROLE_ADMIN', 2);

// nõuame vajalikke failide olemasolu
require_once MODEL_DIR.'template.php'; // html vaade failide töötlus
require_once MODEL_DIR.'http.php'; // HTTP töötlus klass
require_once MODEL_DIR.'linkobjekt.php';
require_once MODEL_DIR.'mysql.php';
require_once 'db_conf.php';
// loome vajalikud objektid, mis on pidevalt töös
$http = new linkobjekt();
$db = new mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME);
