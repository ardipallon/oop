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
$sql = 'SELECT content_id, content, title '.'FROM content WHERE parent_id='.fixDB(0).' AND show_in_menu='.fixDB(1);
$result = $db->getData($sql);

// loome üks menüü element nimega esimene
$itemTmpl->set('name', 'esimene');
// määrata menüüs väljastava elemendiga seotud link
// http://ap.ikt.khk.ee/oop/index.php?control=esimene
$link = $http->getLink(array('control'=>'esimene'));
$itemTmpl->set('link', $link);
// lisame antud element menüüsse
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>
// loome veel üks menüü element nimega teine
$itemTmpl->set('name', 'teine');
// määrata menüüs väljastava elemendiga seotud link
// http://ap.ikt.khk.ee/oop/index.php?control=esimene
$link = $http->getLink(array('control'=>'teine'));
$itemTmpl->set('link', $link);
// lisame antud element menüüsse
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>
$itemTmpl->set('name', 'avaleht');
$link = $http->getLink(array('control'=>'default'));
$itemTmpl->set('link', $link);
$menuTmpl->add('menu_items', $itemTmpl->parse());

// ehitame valmis menüü
$menu = $menuTmpl->parse();
// lisame valmis menüü lehele
$mainTmpl->set('menu', $menu);

