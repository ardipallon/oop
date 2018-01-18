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

// nõuame vajalikke failide olemasolu
require_once MODEL_DIR.'template.php'; // html vaade failide töötlus