<?php
$formAction = "../install";
$formMethod = "POST";
$formLegend = "Database Credentials";
beginForm($formAction,$formMethod,$formLegend);

$dbserver = new formGroup();
		$dbserver->label = "MySQL Server";
		$dbserver->labelsize = "4";
		$dbserver->type = "text";
		$dbserver->id = "dbsrv";
		$dbserver->name = "dbsrv";
		$dbserver->value = "localhost";
		$dbserver->inputsize = "5";
		$dbserver->required = "1";
		$dbserver->placeholder = "Database Server (usually localhost)";
$dbserver->renderGroup();

$dbuser = new formGroup();
		$dbuser->label = "MySQL User";
		$dbuser->labelsize = "4";
		$dbuser->type = "text";
		$dbuser->id = "dbusr";
		$dbuser->name = "dbusr";
		$dbuser->inputsize = "5";
		$dbuser->required = "1";
		$dbuser->placeholder = "Username of MySQL User";
$dbuser->renderGroup();

$dbpw = new formGroup();
		$dbpw->label = "MySQL Password";
		$dbpw->labelsize = "4";
		$dbpw->type = "password";
		$dbpw->id = "dbpass";
		$dbpw->name = "dbpass";
		$dbpw->inputsize = "5";
		$dbpw->required = "1";
		$dbpw->placeholder = "MySQL User Password";
$dbpw->renderGroup();

$dbase = new formGroup();
		$dbase->label = "Database";
		$dbase->labelsize = "4";
		$dbase->type = "text";
		$dbase->id = "dbname";
		$dbase->name = "dbname";
		$dbase->inputsize = "5";
		$dbase->required = "1";
		$dbase->value = "iptv";
		$dbase->placeholder = "Name of database";
$dbase->renderGroup();

$submit = new formGroup();

		$submit->type = "button";
		$submit->style = "success";
		$submit->id = "submit";
		$submit->name = "submit";
		$submit->value = "submit";
		$submit->action = "submit";
		$submit->text = "Confirm";
$submit->renderGroup();
endform();

?>
