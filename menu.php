<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 24.01.2018
 * Time: 10:54
 */
// loome menüü ehitamiseks vajalikud objektid
$menuTmpl = new template('menu.menu'); // menüü mall
$itemTmpl = new template('menu.item'); // menüü elemendi mall

// koostame menüü ja sisu loomise päring
$sql = 'SELECT content_id, content, title FROM content WHERE parent_id='.fixDB(0).' AND show_in_menu='.fixDB(1);
$result = $db->getData($sql);

// kui andmed on andmebaasis olemas, siis loome menüü nende põhjal
if($result != false){
    foreach($result as $page){
        $itemTmpl->set('name', $page['title']);
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $itemTmpl->set('link', $link);
        $menuTmpl->add('menu_items', $itemTmpl->parse());
    }
}
// Paneme paika valmismenüü
$mainTmpl->set('menu', $menuTmpl->parse());