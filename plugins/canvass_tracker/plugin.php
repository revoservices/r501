<?php
/** 
* Plugin name:
* Author:
* Homepage:
* Usage:
*/

function ctrack_about() {
$plugin_info = simplexml_load_file('plugins/canvass_tracker/plugin.xml');
echo "<div class='well'>";
echo "<p><b>Name: </b>".$plugin_info->name."</p>";
echo "<p><b>Author: </b>".$plugin_info->author."</p>";
echo "<p><b>Version: </b>".$plugin_info->version."</p>";
echo "<p><b>Homepage: </b>".$plugin_info->homepage."</p>";
echo "<p><b>Description: </b>".$plugin_info->description."</p>";
echo "</div>";
}

?>
