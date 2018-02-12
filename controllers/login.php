<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 12.02.2018
 * Time: 11:08
 */
// Võtame kasutusele login.html faili
$loginForm = new template('login');
// kasutajate andmete töötlusfaili link
$link = $http->getLink(array('control'=>'login_do'));
// Lisame vajalikud andmed malli
$loginForm->set('link', $link);
$loginForm->set('kasutaja', 'Sisesta kasutajanimi');
$loginForm->set('parool', 'Sisesta parool');
$loginForm->set('nupp', 'Logi sisse!');
// Nüüd tuleb see sisu väljastada peamalli sees
$mainTmpl->set('content', $loginForm->parse());