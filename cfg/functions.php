<?php
require_once('cfg/lib/func_security.php');
require_once('cfg/lib/func_db.php');
require_once('cfg/lib/func_markup.php');
require_once('cfg/lib/func_forms.php');
require_once('cfg/lib/func_blog.php');


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


?>
