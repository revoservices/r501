<?php
/** 
* Plugin name:
* Author:
* Homepage:
* Usage:
*/
$plugin_info = simplexml_load_file('plugins/canvass_tracker/plugin.xml');
echo $plugin_info->author;
print_r($plugin_info);

?>
