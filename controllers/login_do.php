<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 12.02.2018
 * Time: 11:23
 */
// Küsime vormi poolt tulnud andmed
$username = $http->get('username');
$password = $http->get('password');
// Kontrollime SQL päringu kasutaja kontrollimiseks
$sql = 'SELECT * FROM user WHERE username='.fixDB($username).'AND password= '.fixDB(md5($password));
//echo $sql;
$result = $db->getData($sql);
if($result != false){
    // Logime kasutajat sisse
    // ja avame temale sessiooni
} else {
    // Probleem sisselogimisega
    // suuname tagasi sisselogimisvormile
    $link = $http->getLink(array('control'=>'login'));
    $http->redirect($link);
}