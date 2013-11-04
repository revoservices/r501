<?php
require_once('cfg/lib/func_security.php');
require_once('cfg/lib/func_db.php');
require_once('cfg/lib/func_markup.php');
require_once('cfg/lib/func_forms.php');


/**
* Various functions that do not require an object
*
* @since 1.0
*
*/


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
* Display the login form
*
* @package security
* @subpackage security\interfaces\forms
*
*/
	function loginform() {
		include('pages/login.php');
	}

/* END SECURITY FUNCTIONS */

?>
