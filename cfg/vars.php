<?php

$options = $mysqli->query("SELECT * FROM `site_options`");
	while ($option = $options->fetch_assoc())
	{
		$opt[$option['optname']] = $option['optval'];
	}

//PREFERENCES

$sitename = $opt['sitename'];
$sitetag = $opt['sitetag'];
$siteowner = $opt['siteowner'];
$siteurl = $opt['siteurl'];
$sitelogofile = $opt['sitelogo'];
$sitelogo = "<img src='".$sitelogofile."'>";
$sitetitle = $sitename." - ".$sitetag;

//UTILITY MODES
$maint_mode = $opt['maint_mode'];
$reg_open = $opt['reg_open'];
$canlogin = $opt['enable_login'];
$options->close();
?>
