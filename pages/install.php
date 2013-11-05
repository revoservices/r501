<?php
//Required PHP version and success/error messages
$phpreq = "5.3.9";
$phpver = phpversion();
$phpversion = substr($phpver, 0, 5);
$failglyph = "<span class='glyphicon glyphicon-exclamation-sign'></span> ";
$passglyph = "<span class='glyphicon glyphicon-thumbs-up'></span> ";
$phpfailerr = $failglyph."Sorry, PHP version ".$phpreq." is required to use this program. You have version ".$phpversion.".";
$phpsuccess = $passglyph."Success! You have PHP version ".$phpversion." installed.";
$mysqlierr = $failglyph."The extension 'mysqli' does not appear to be loaded.";
$mysqlipass = $passglyph."Success! Mysqli is loaded.";
$pdoerr = $failglyph."The extension 'pdo' does not appear to be loaded.";
$pdopass = $passglyph."Success! PDO is loaded.";

if (!isset($_POST['submit'])) {
//Check versions and extensions
if ($phpversion > $phpreq) {
	$reqspassed = "1";
	$passphp = new alert("success",$phpsuccess);
	$passphp->showalert();
}
else {
	$reqspassed = "0";
	$failphp = new alert("danger",$phpfailerr);
	$failphp->showalert();
}

if (extension_loaded('mysqli')) {
	if ($reqspassed != "0") {
	$reqspassed = "1";
	}
	$passmysqli = new alert("success",$mysqlipass);
	$passmysqli->showalert();
}
else {
	$reqspassed = "0";
	$failmysqli = new alert("danger",$mysqlierr);
	$failmysqli->showalert();
}

if (extension_loaded('pdo')) {
	if ($reqspassed != "0") {
	$reqspassed = "1";
	}
	$passpdo = new alert("success",$pdopass);
	$passpdo->showalert();
}
else {
	$reqspassed = "0";
	$failpdo = new alert("danger",$pdoerr);
	$failpdo->showalert();
}

} //End if $submit not set

if (isset($_POST['submit'])) {
$dbs = $_POST['dbsrv'];
$dbu = $_POST['dbusr'];
$dbp = $_POST['dbpass'];
$dbt = $_POST['dbname'];
$admin = $_POST['admin'];
$adminmail = $_POST['adminmail'];
$adminpass = md5($_POST['adminpass']);

$installconn = new mysqli($dbs, $dbu, $dbp, $dbt);
$dberr = $failglyph."Failed to connect to MySQL: (".$installconn->connect_errno.")".$installconn->connect_error;
$dbpass = $passglyph."Successfully connected to your database!";
$createerr = $failglyph."There was an error creating table '";
$createpass = $passglyph."Successfully created table '";
$poperr = $failglyph."There was an error populating table '";
$poppass = $passglyph."Successfully populating table '";
	if ($installconn->connect_errno) {
		$dbfail = new alert("danger",$dberr);
		$dbfail->showalert();
	}
	else { 
		$dbconn = new alert("success",$dbpass);
		$dbconn->showalert();
		include('inc/createdb.php');
		
	}
}


if($reqspassed == "1") {

include('templates/forms/install_db.php');
}
if($dbmade == "1") {

}
?>
