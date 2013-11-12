<?php
echo "<table class='table table-bordered table-condensed'>";
echo "<th>Parent ID</th>";
echo "<th>Order</th>";
echo "<th>Name</th>";
echo "<th>Destination</th>";
echo "<th>Class</th>";
echo "<th>Glyph</th>";
$items = $mysqli->query("SELECT `menu_items`.*, `menus`.`menu_id`, `menus`.`menu_name`
 FROM `menu_items`
 JOIN `menus` ON `menu_items`.`mparent_id` = `menus`.`menu_id`
 ORDER BY `menu_items`.`mparent_id`, `menu_items`.`mitem_order`"); 
while ($item = $items->fetch_assoc()) { 
echo "<tr><td>".$item['menu_name']."</td><td>".$item['mitem_order']."</td><td>".$item['mitem_name']."</td>";
echo "<td>".$item['mitem_dest']."</td><td>".$item['mitem_class']."</td><td>".$item['mitem_glyph']."</td></tr>";
}
echo "</table>";
?>
