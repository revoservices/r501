<?php 
/**
*
* Image Serving Script
*
* Usage: <img src="{domain}/images/{category}/{id}">
*
*/
include('../cfg/dbc.php');
function blogimg($postid) {
	global $mysqli;
	header('Content-Type: image/png'); //set image header 
	if(isset($postid)) 
	{ 
		$imgsql = "SELECT `post_pic` FROM `posts` WHERE `posts`.`postID` = '$postid'";
		$imgstmt = $mysqli->query($imgsql);
		$imgcount = $imgstmt->num_rows;
		while ($getimg = $imgstmt->fetch_assoc()) {
		// now query the DB based on $id to get image data, then... 
			echo $getimg['post_pic']; 
			exit;  // so no more data is accidentally output 
		} // end while loop
	} //end if $postid is set

// if we got here, something went wrong, so... 
header("HTTP/1.0 404 Not Found");
}

function userimg($userid) {
	global $mysqli;
	header('Content-Type: image/png'); //set image header
	if(isset($userid)) 
	{ 
		$imgsql = "SELECT `userpic` FROM `user_data` WHERE `user_data`.`userid` = '$userid'";
		$imgstmt = $mysqli->query($imgsql);
		$imgcount = $imgstmt->num_rows;
		while ($getimg = $imgstmt->fetch_assoc()) {
		// now query the DB based on $id to get image data, then... 
			echo $getimg['userpic']; 
			exit;  // so no more data is accidentally output 
			
		} // end while loop
	} //end if $postid is set

// if we got here, something went wrong, so... 
header("HTTP/1.0 404 Not Found");
}

function siteimg($userid) {
	global $mysqli;
	header('Content-Type: image/png'); //set image header
	if(isset($userid)) 
	{ 
		$imgsql = "SELECT `image` FROM `site_images` WHERE `site_images`.`imageID` = '$userid'";
		$imgstmt = $mysqli->query($imgsql);
		$imgcount = $imgstmt->num_rows;
		while ($getimg = $imgstmt->fetch_assoc()) {
		// now query the DB based on $id to get image data, then... 
			echo $getimg['image']; 
			exit;  // so no more data is accidentally output 
			
		} // end while loop
	} //end if $postid is set

// if we got here, something went wrong, so... 
header("HTTP/1.0 404 Not Found");
}

//Call function blogimg
$cat = $_GET['cat'];
$img = (int)$_GET['id']; 
switch ($cat) {
	case "blog":
		blogimg($img);
		break;
	case "user":
		userimg($img);
		break;
	case "site";
		siteimg($img);
		break;
}
?>

