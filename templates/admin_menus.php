<?php
echo "<table class='table table-bordered table-condensed'>";
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
echo "<tr><td>".$menu['menu_name']."</td><td>".$menu['menu_enabled']."</td><td>".$menu['menu_dd']."</td>";
echo "<td>".$menu['menu_align']."</td><td>".$menu['priv_display']."</td><td>".$menu['menu_class']."</td><td>".$menu['menu_glyph']."</td>";
echo "</tr>";
}
echo "</table>";
?>
