<?php
$formAction = "../install";
$formMethod = "POST";
$formLegend = "Installation Options";
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
		$dbuser->autocomplete = "off";
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
		$dbpw->autocomplete = "off";
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

echo "<h3>Site Configuration</h3>";
echo "<hr>";
$newadmin = new formGroup();
		$newadmin->label = "Admin Username";
		$newadmin->labelsize = "4";
		$newadmin->type = "text";
		$newadmin->id = "admin";
		$newadmin->name = "admin";
		$newadmin->inputsize = "5";
		$newadmin->required = "1";
		$newadmin->placeholder = "Create a username";
$newadmin->renderGroup();

$newadminmail = new formGroup();
		$newadminmail->label = "Admin Email";
		$newadminmail->labelsize = "4";
		$newadminmail->type = "text";
		$newadminmail->id = "adminmail";
		$newadminmail->name = "adminmail";
		$newadminmail->inputsize = "5";
		$newadminmail->required = "1";
		$newadminmail->placeholder = "Your email address";
$newadminmail->renderGroup();

$newadminpass = new formGroup();
		$newadminpass->label = "Admin Password";
		$newadminpass->labelsize = "4";
		$newadminpass->type = "password";
		$newadminpass->id = "adminpass";
		$newadminpass->name = "adminpass";
		$newadminpass->inputsize = "5";
		$newadminpass->required = "1";
		$newadminpass->placeholder = "Administrator Password";
$newadminpass->renderGroup();

$newsitename = new formGroup();
		$newsitename->label = "Site Name";
		$newsitename->labelsize = "4";
		$newsitename->type = "text";
		$newsitename->id = "sitename";
		$newsitename->name = "sitename";
		$newsitename->inputsize = "5";
		$newsitename->required = "1";
		$newsitename->placeholder = "Name of your new site";
$newsitename->renderGroup();

$newsitetag = new formGroup();
		$newsitetag->label = "Site Tagline";
		$newsitetag->labelsize = "4";
		$newsitetag->type = "text";
		$newsitetag->id = "sitetag";
		$newsitetag->name = "sitetag";
		$newsitetag->inputsize = "5";
		$newsitetag->required = "1";
		$newsitetag->placeholder = "A tagline for your site";
$newsitetag->renderGroup();

$newowner = new formGroup();
		$newowner->label = "Site Owner";
		$newowner->labelsize = "4";
		$newowner->type = "text";
		$newowner->id = "owner";
		$newowner->name = "owner";
		$newowner->inputsize = "5";
		$newowner->required = "1";
		$newowner->placeholder = "Your name or the name of your organization";
$newowner->renderGroup();

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
