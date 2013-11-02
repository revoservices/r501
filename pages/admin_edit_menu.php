<div class="panel">
<?php

$menus = $mysqli->query("SELECT * FROM `menus`");
while ($m = $menus->fetch_object()) {
echo $m->menu_name."\n";
echo $m->menu_class."\n";
echo $m->menu_glyph."\n";
echo "<br>";
}
?>
</div>