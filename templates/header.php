<!doctype html>
	<?php
	require_once('cfg/dbc.php');
	require_once('cfg/functions.php');
	require_once('cfg/classes.php');
	require_once('cfg/vars.php');
	require_once('cfg/user.php');

	?>
<html>
<head>
<title>
	<?php 
	//Set in cfg/vars.php
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
	include('templates/menu.php'); 
	?>

<div class="container center-container">
