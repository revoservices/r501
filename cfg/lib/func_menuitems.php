<?php

function getMenuItems() 
{
	global $mysqli;
	
	$items = $mysqli->query("SELECT `menu_items`.*, `menus`.`menu_id`, `menus`.`menu_name`
 FROM `menu_items`
 JOIN `menus` ON `menu_items`.`mparent_id` = `menus`.`menu_id`
 ORDER BY `menu_items`.`mparent_id`, `menu_items`.`mitem_order`"); 
	while ($results = $items->fetch_assoc()) {
		$mnuitms[] = $results;
	}
	return $mnuitms;
}
?>