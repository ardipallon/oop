<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 31.01.2018
 * Time: 10:50
 */
$control = $http->get('control'); // Kontrolleri faili nimi
$file = CONTROL_DIR.$control.'php'; // Kontrolleri faili tee
if(file_exists($file) and is_file($file) and is_readable($file)){
    require_once $file;
} else {
    // kui ei ole kontrolleri faili või
    // ei ole veel midagi valitud
    $file = CONTROL_DIR.DEFAULT_CONTROL.'.php';
    require_once $file;
}