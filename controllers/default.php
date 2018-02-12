<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 31.01.2018
 * Time: 11:00
 */
$page_id = (int)$http->get('page_id'); // Lehe identifikaator
// koostame päringu contenti jaoks
$sql = 'SELECT * from content WHERE content_id ='.fixDB($page_id);
// küsime andmed andmebaasist
$result = $db->getData($sql);
if(result == false){
    $sql = 'SELECT * FROM content WHERE is_first_page='.fixDB(1);
    $result = $db->getData($sql);
}
if($result != false){
    $page = $result[0];
    $http->set('page_id', $page['content_id']);
    $mainTmpl->set('content', 'content');
}
