<?php
//$createdb = "CREATE DATABASE IF NOT EXISTS `iptv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci; ";

//$createdb = "USE `".$dbt."`; 

$createblobs = "CREATE TABLE IF NOT EXISTS `blobs` (
  `blobid` int(11) NOT NULL AUTO_INCREMENT,
  `short` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `footer` text NOT NULL,
  `size` text NOT NULL,
  `class` text NOT NULL,
  PRIMARY KEY (`blobid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";
$install = $installconn->query($createblobs);
$name = "blobs'";
if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}


/*
CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(4) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `body` mediumblob,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
*/
$createmenus = "CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` text NOT NULL,
  `menu_enabled` set('0','1') NOT NULL DEFAULT '1',
  `menu_dd` text NOT NULL,
  `menu_align` text NOT NULL,
  `menu_vis` text NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_class` text NOT NULL,
  `menu_glyph` text NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;";
$install = $installconn->query($createmenus);
$name = "menus'";

if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}


$maketbl_menuitems = "CREATE TABLE IF NOT EXISTS `menu_items` (
  `mitem_id` int(11) NOT NULL AUTO_INCREMENT,
  `mparent_id` int(11) NOT NULL DEFAULT '0',
  `mitem_order` int(11) NOT NULL,
  `mitem_name` text NOT NULL,
  `mitem_dest` text NOT NULL,
  `mitem_class` text NOT NULL,
  `mitem_glyph` text NOT NULL,
  PRIMARY KEY (`mitem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ; ";
$install = $installconn->query($maketbl_menuitems);
$name = "menu items'";

if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}


$maketbl_posts = "CREATE TABLE IF NOT EXISTS `posts` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `post_vis` set('1','2','3','4','5') NOT NULL,
  `post_title` text NOT NULL,
  `post_body` text NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_pic` longblob NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ; ";
$install = $installconn->query($maketbl_posts);
$name = "blog posts'";

if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}

$maketbl_options = "CREATE TABLE IF NOT EXISTS `site_options` (
  `optid` int(11) NOT NULL AUTO_INCREMENT,
  `optname` text NOT NULL,
  `optval` text NOT NULL,
  PRIMARY KEY (`optid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ; ";
$install = $installconn->query($maketbl_options);
$name = "site options'";

if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}
/*
CREATE TABLE IF NOT EXISTS `template` (
  `template_id` int(4) NOT NULL AUTO_INCREMENT,
  `Head_Open` varchar(60) DEFAULT NULL,
  `Head_Close` varchar(60) DEFAULT NULL,
  `Page_End` varchar(60) DEFAULT NULL,
  `Date` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
*/

$maketbl_users = "CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `userpass` text NOT NULL,
  `userlevel` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ; ";
$install = $installconn->query($maketbl_users);
$name = "users'";

if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}

$maketbl_userclasses = "CREATE TABLE IF NOT EXISTS `user_classes` (
  `priv_id` int(11) NOT NULL AUTO_INCREMENT,
  `priv_name` text NOT NULL,
  `priv_display` text NOT NULL,
  PRIMARY KEY (`priv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ; ";
$install = $installconn->query($maketbl_userclasses);
$name = "user classes'";

if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}

$maketbl_userdata = "CREATE TABLE IF NOT EXISTS `user_data` (
  `udid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `dob` date NOT NULL,
  `userpic` longblob NOT NULL,
  PRIMARY KEY (`udid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ; "; 
$install = $installconn->query($maketbl_userdata);
$name = "user data'";

if(!$install) {
	$crtfail = new alert("danger",$createerr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$createpass.$name);
	$crtpass->showalert();

}

$populate_menus = "INSERT INTO `menus` (`menu_id`, `menu_name`, `menu_enabled`, `menu_dd`, `menu_align`, `menu_vis`, `menu_parent`, `menu_class`, `menu_glyph`) VALUES
(1, 'main', '1', '', 'left', '1', 0, 'bar', ''),
(2, 'users', '1', '', 'left', '2', 0, 'bar', ''),
(3, 'admin', '1', 'Admin', 'left', '3', 0, 'dropdown-menu', 'adjust'),
(4, 'suadmin', '1', 'Sudo', 'left', '4', 0, 'dropdown-menu', 'globe'),
(5, 'useropts', '1', 'Options', 'right', '2', 0, 'dropdown-menu', 'user'),
(7, 'support', '1', '', 'right', '1', 0, 'bar', 'thumbsup-sign'); ";
$install = $installconn->query($populate_menus);
$name = "main menus'";

if(!$install) {
	$crtfail = new alert("danger",$poperr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$poppass.$name);
	$crtpass->showalert();

}

$populate_menuitems = "INSERT INTO `menu_items` (`mitem_id`, `mparent_id`, `mitem_order`, `mitem_name`, `mitem_dest`, `mitem_class`, `mitem_glyph`) VALUES
(1, 1, 0, 'Home', 'main', '', 'home'),
(2, 1, 1, 'About', 'about', '', 'briefcase'),
(3, 1, 2, 'Contact', 'contact', '', 'comment'),
(4, 2, 0, 'Forum', 'forum', '', 'bullhorn'),
(5, 3, 1, 'View Users', 'admin_view_users', 'li', ''),
(6, 3, 0, 'User Options', 'dfgdsg', 'dropdown-header', ''),
(7, 3, 2, '', '', 'divider', ''),
(8, 3, 3, 'Edit Users', 'admin_edit_users', 'li', ''),
(10, 4, 0, 'Super Admin', '', 'dropdown-header', ''),
(11, 5, 1, 'Profile', 'profile', '', ''),
(12, 5, 2, '', '', 'divider', ''),
(13, 5, 3, 'Edit Profile', 'edit_profile', '', ''),
(14, 5, 4, 'Logout', 'logout', '', ''),
(15, 5, 0, 'User Options', '', 'dropdown-header', ''),
(16, 7, 0, 'Support', 'support', '', 'thumbs-up'),
(17, 4, 1, 'Create User', 'admin_user_add', '', ''),
(18, 4, 2, 'Manage Users', '', '', ''),
(19, 3, 6, 'News Posts', 'admin_blogposts', '', ''),
(20, 3, 7, 'Pages', 'admin_pages', '', ''),
(21, 4, 3, 'Options', '', 'dropdown-header', ''),
(22, 4, 4, 'Site Configuration', 'suadmin_options', 'li', ''); ";
$install = $installconn->query($populate_menuitems);
$name = "menu items'";

if(!$install) {
	$crtfail = new alert("danger",$poperr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$poppass.$name);
	$crtpass->showalert();

}

$populate_userclasses = "INSERT INTO `user_classes` (`priv_id`, `priv_name`, `priv_display`) VALUES
(1, 'none', 'None'),
(2, 'user', 'User'),
(3, 'admin', 'Staff'),
(4, 'suadmin', 'Administrator'); ";
$install = $installconn->query($populate_userclasses);
$name = "user classes'";

if(!$install) {
	$crtfail = new alert("danger",$poperr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$poppass.$name);
	$crtpass->showalert();
}

$populate_users = "INSERT INTO `users` (`userid`, `username`, `email`, `userpass`, `userlevel`) VALUES";
$populate_users .= "(1, '$admin', '$adminmail', '$adminpass', 4); ";
$install = $installconn->query($populate_users);
$name = "admin account'";

if(!$install) {
	$crtfail = new alert("danger",$poperr.$name);
	$crtfail->showalert();
}
else {
	$crtpass = new alert("success",$poppass.$name);
	$crtpass->showalert();
	$dbmade = "1";

}

$dbcfile = 'cfg/dbc.php';
$handle = fopen($dbcfile, 'w') or die('Cannot open file:  '.$dbcfile); //implicitly creates file
$dbc_open = '<?php';
fwrite($handle, $dbc_open);
$dbc_server = "\n".'$dbs = "'.$dbs.'";';
fwrite($handle, $dbc_server);
$dbc_user = "\n".'$dbu = "'.$dbu.'";';
fwrite($handle, $dbc_user);
$dbc_pass = "\n".'$dbp = "'.$dbp.'";';
fwrite($handle, $dbc_pass);
$dbc_table = "\n".'$dbt = "'.$dbt.'";';
fwrite($handle, $dbc_table);
$dbc_conn = "\n".'$mysqli = new mysqli($dbs, $dbu, $dbp, $dbt);';
fwrite($handle, $dbc_conn);
$dbc_conn2 = "\n".'if ($mysqli->connect_errno) {';
fwrite($handle, $dbc_conn2);
$dbc_conn3 = "\n".'echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; }';
fwrite($handle, $dbc_conn3);
$dbc_conn4 = "\n".'$dbh = new PDO(\'mysql:host='.$dbs.';dbname='.$dbt.'\', '.$dbu.', '.$dbp.');';
fwrite($handle, $dbc_conn4);
$dbc_close = "\n".'?>';
fwrite($handle, $dbc_close);
?>
