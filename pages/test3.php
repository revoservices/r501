<?php
include('templates/menu_dashboard.php');
echo "<table class='table table-bordered'>";
echo "<th>Menu ID</th>";
echo "<th>Name</th>";
echo "<th>Enabled</th>";
echo "<th>Dropdown Display</th>";
echo "<th>Alignment</th>";
echo "<th>Visibility</th>";
echo "<th>Class</th>";
echo "<th>Glyph</th>";
$menus = $mysqli->query("SELECT `menus`.*, `user_classes`.`priv_id`, `user_classes`.`priv_display`
 FROM `menus`
 JOIN `user_classes` ON `menus`.`menu_vis` = `user_classes`.`priv_id`
 ORDER BY `menus`.`menu_vis`"); 
while ($menu = $menus->fetch_assoc()) { 
echo "<tr><td>".$menu['menu_id']."</td><td>".$menu['menu_name']."</td><td>".$menu['menu_enabled']."</td><td>".$menu['menu_dd']."</td>";
echo "<td>".$menu['menu_align']."</td><td>".$menu['priv_display']."</td><td>".$menu['menu_class']."</td><td>".$menu['menu_glyph']."</td>";
echo "</tr>";
}
echo "</table>";

echo "<table class='table table-bordered'>";
echo "<th>Item ID</th>";
echo "<th>Parent ID</th>";
echo "<th>Order</th>";
echo "<th>Name</th>";
echo "<th>Destination</th>";
echo "<th>Class</th>";
echo "<th>Glyph</th>";
$items = $mysqli->query("SELECT * FROM `menu_items` ORDER BY `menu_items`.`mparent_id`, `menu_items`.`mitem_order`"); 
while ($item = $items->fetch_assoc()) { 
echo "<tr><td>".$item['mitem_id']."</td><td>".$item['mparent_id']."</td><td>".$item['mitem_order']."</td><td>".$item['mitem_name']."</td>";
echo "<td>".$item['mitem_dest']."</td><td>".$item['mitem_class']."</td><td>".$item['mitem_glyph']."</td></tr>";
}
echo "</table>";
?>
