<?php 
/**
* Generates dynamic menu from SQL table
*
* @todo Sub-dropdown menus
*
*/

include('inc/navbar_top.php');

$toplvl = "SELECT * FROM `menus` WHERE `menu_vis` <= '$userlevel' AND `menu_enabled` = '1'";
$toplevel = $mysqli->query($toplvl);

foreach ($toplevel as $tl) {
	echo "<ul class='nav navbar-nav pull-".$tl['menu_align']."'>";
	$mclass = $tl['menu_class'];
	$mid = $tl['menu_id'];

	$childs = $mysqli->query("SELECT DISTINCT * FROM `menu_items` WHERE `mparent_id` = '$mid'");
$i = "1";
	while ($ch = $childs->fetch_assoc()) {
switch ($mclass) {
	case "bar";
		echo "<li>";
		$dest = $ch['mitem_dest'];
		startlink($dest);
		echo "<span class='glyphicon glyphicon-".$ch['mitem_glyph']."'></span> ";
		echo $ch['mitem_name']."</a></li>";
	break;
	case "dropdown-menu";
		if ($i == "1") {
			echo "<li class='dropdown'>";
			echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>";
			echo "<span class='glyphicon glyphicon-".$tl['menu_glyph']."'></span> ";
			echo $tl['menu_dd'];
			echo "</a>";
		$i++;
			echo "<ul role='menu' class='dropdown-menu'>";
			$itms = $mysqli->query("SELECT *
			 FROM `menu_items`
			 WHERE `mparent_id` = '$mid' ORDER BY `mitem_order`");
			while ($itm = $itms->fetch_assoc()) {
				$mc = $itm['mitem_class'];
				$md = $itm['mitem_dest'];
				if ($mc == "dropdown-header" || $mc == "divider") {
					echo "<li class='".$mc."'>";
					echo $itm['mitem_name'];
					echo "</li>";
			} //not header or divider
		
		 //create linked item...
		else {
			echo "<li role='presentation' class='".$mc."'>";
			makelink($itm['mitem_name'],$itm['mitem_dest']);
			//echo "<a href='".$itm['mitem_dest']."'>".$itm['mitem_name']."</a></li>";
		
		} //if class is header or divider

			}
		echo "</ul></li>";

		} //i equals 1
	break;

} //switch class
} //while ch=childs->fetch_assoc
echo "</ul>";

} //foreach toplevel
if($canlogin == "1") {
	if($_SESSION['loggedin'] == "1") {
		echo "<p class='navbar-text pull-right'>";
		echo "Signed in as ".$myname;
		echo "</p>";
	}
	else {
		echo "<a href='#myModal' role='button' class='btn btn-success navbar-btn pull-right' data-toggle='modal'>Log In</a>";

	}
}

?>
</div>

</nav>

