<!doctype html>
<?php
/** Load configuration files
* All of these files simply load other ones
* Keeps this section clean and config files organized
**/
	require_once('cfg/dbc.php');
	require_once('cfg/functions.php');
	require_once('cfg/classes.php');
	require_once('cfg/vars.php');
	require_once('cfg/user.php');
	require_once('cfg/plugins.php');
?>
<html>
<head>
<title>
<?php 
	//This can be set manually in cfg/vars.php
	echo $sitetitle; 
?>
</title>
<meta name="viewport" content="width=device-width">
<?php 
	//CSS files to be used
	require('cfg/styles.php'); 
	//Javascript files to be used
	require('cfg/js.php'); 
?>
</head>
<body>
<?php 
	include('inc/menu.php'); 
?>

<div class="container center-container">
