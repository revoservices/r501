<?php
issudo();
if (isset($_POST['newitem'])) 
{
	$parent = null;
	$class = null;
	$order = null;
	$dest = null;
	if (!isset($_POST['glyph'])) 
	{
		$glyph = "";
	}
	else
	{
		$glyph = $_POST['glyph'];
	}	
	$parent = $_POST['parent'];
	$class = $_POST['itemclass'];
	$order = $_POST['order'];
	$linkname = $_POST['linkname'];
	$dest = $_POST['destination'];
	$newitmsql = "INSERT INTO menu_items
		(mparent_id, mitem_order, mitem_name, mitem_dest, mitem_class, mitem_glyph)
		VALUES (:parent, :order, :name, :dest, :class, :glyph)";
	$newitm = $dbh->prepare($newitmsql);
	if ($newitm->execute(array(':parent'=>$parent,
				':order'=>$order,
				':name'=>$linkname,
				':dest'=>$dest,
				':class'=>$class,
				':glyph'=>$glyph))
	) {
		$inserted = new alert('success',"Successfully created new menu item.");
		$inserted->showalert();
	}
	else
	{
		$inserr = new alert('danger',"There was an error creating this menu item.");
		$inserr->showalert();
	}
}
include('templates/menu_dashboard.php');

echo "<div class='tab-content'><div class='tab-pane active' id='items'>";

echo "<div class='row'>";

echo "<div class='col-7 col-lg-7'>";
include('templates/admin_menu_items.php');
echo "</div>";

echo "<div class='col-5 col-lg-5'>";
include('templates/forms/add_menu_item.php');
echo "</div>";

echo "</div>"; //row
echo "</div>"; //tab pane

echo "<div class='tab-pane' id='mainmenus'>";

echo "<div class='row'>";
echo "<div class='col-7 col-lg-7'>";
include('templates/admin_menus.php');
echo "</div>";

echo "<div class='col-5 col-lg-5'>";
include('templates/forms/add_menu.php');

echo "</div></div>";

echo "</div></div>";
?>
