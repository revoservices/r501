<?php
issudo();
include('templates/menu_dashboard.php');

echo "<div class='tab-content'><div class='tab-pane active' id='mainmenus'>";

echo "<div class='row'>";

echo "<div class='col-7 col-lg-7'>";
include('templates/admin_menus.php');
echo "</div>";

echo "<div class='col-5 col-lg-5'>";
include('templates/forms/add_menu.php');
echo "</div>";

echo "</div>"; //row
echo "</div>"; //tab pane

echo "<div class='tab-pane' id='items'>";

echo "<div class='row'>";
echo "<div class='col-7 col-lg-7'>";
include('templates/admin_menu_items.php');
echo "</div>";

echo "<div class='col-5 col-lg-5'>";
include('templates/forms/add_menu_item.php');
echo "</div></div>";

echo "</div></div>";
?>
