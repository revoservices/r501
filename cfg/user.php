<?php
if (!isset($_SESSION['loggedin'])) {
	$_SESSION['userlvdefault'] = "1";
	$userlevel = $_SESSION['userlvdefault'];
}
else {
	$loggedin = $_SESSION['loggedin'];
	if ($loggedin == "1") {
		$userid = $_SESSION['userid'];
		$userlevel = $_SESSION['userlevel'];
		$myname = $_SESSION['myname'];
		$myemail = $_SESSION['myemail'];
	}
}
?>
