<?php
/** Pull Blog Posts
*
* Array of posts
*
*/
function blogposts() 
{
	global $userlevel, $mysqli;
	$sql = "SELECT 
		`posts`.`postID`,
		`posts`.`post_title`,
		`posts`.`post_body`,
		`posts`.`post_time`,
		`posts`.`post_author`,
		`posts`.`post_pic`,
		`user_data`.`userid`,
		`user_data`.`name`
		 FROM `posts`
		JOIN `user_data` ON `posts`.`post_author` = `user_data`.`userid`
		 WHERE `posts`.`post_vis` <= '$userlevel'
		 order by `posts`.`postID` DESC";
        $stmt = $mysqli->query($sql);
	$entries = array();
	while ($rows = $stmt->fetch_assoc()) 
	{
		$entries[] = $rows;
	}
	return $entries;
}

?>
