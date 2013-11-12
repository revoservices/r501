<?php
/**
* Check for su
*
* Compares $loggedin and $userlevel to determine whether user has elevated priveleges
*
* @package security
* @subpackage functions\checks
*
* @version 2.0
*
*/
	function issudo() {
	global $admin, $loggedin, $siteowner, $userlevel;
		if ($loggedin != "1" || $userlevel < "4") {
			$nosudo = "Sorry, you do not have access to this page.";
			$ns = new alert('danger',$nosudo);
			$ns->showalert();
			include("templates/footer.php");
			die();
		}
}
/**
* Check for admin
*
* Compares $loggedin and $userlevel to determine whether user has elevated priveleges
*
* @package security
* @subpackage functions\checks
*
* @version 2.0
*
*/
	function isadmin() {
	global $admin, $loggedin, $siteowner, $userlevel;
		if ($userlevel < "3") {
			$noadmin = "Sorry, you do not have access to this page.";
			$na = new alert('danger',$noadmin);
			$na->showalert();
			include("templates/footer.php");
			die();
		}
}


/**
* User login checker
*
*/
	function isloggedin() {
	global $loggedin, $siteowner;
		if ($loggedin != "1") {
			$nologin = "Please sign in or register.";
			$nl = new alert('danger',$nologin);
			include("templates/footer.php");
			die();
		}
}
/**
* Display the login form
*
* @package security
* @subpackage security\interfaces\forms
*
**/
	function loginform() {
		include('pages/login.php');
	}

?>
