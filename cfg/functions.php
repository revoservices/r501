<?php
/**
* Various functions that do not require an object
*
* @since 1.0
*
*/

function dbsel($tablename) {
global $mysqli;
$sql = "SELECT * FROM `".$tablename."`";
$stmt = $mysqli->query($sql);
while ($results = $stmt->fetch_assoc()) {
$un = $results['username'];
$names = array($un);
}
return $names;

}
/** Pull Blog Posts
*
* Array of posts
*
*/
function blogposts() {
global $mysqli, $userlevel;
	$sql = "SELECT * FROM `posts`"; // WHERE `posts`.`post_vis` <= '$userlevel'";
	$blg = $mysqli->query($sql);
	//$p = array();
	while ($posts = $blg->fetch_assoc()) {
		$blog[] = $posts;
		//var_dump($posts);
	}
return $blog;
}

/**
* Create a link
*
* Generates a link based on two inputs.
*
* @package generators
*
*/
	function newlink($content,$url) {
		echo "<a href='".$url."'>";
		echo $content;
		echo "</a>";
	}
/**
* Display the login form
*
* @package security
* @subpackage security\interfaces\forms
*
*/
	function loginform() {
		include('pages/login.php');
	}

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
		if ($loggedin != "1" && $userlevel < "4") {
			echo "<div class='alert alert-danger'>";
			echo "Sorry, you do not have access to this page.</div>";
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
			$na = new alert(danger,$noadmin);
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
			$nl = new alert(danger,$nologin);
			include("templates/footer.php");
			die();
		}
}
/* END SECURITY FUNCTIONS */

?>
