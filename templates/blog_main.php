<?php
$blog = blogposts();
foreach ($blog as $posts) {
	$title = $posts['post_title'];
	$body = $posts['post_body'];
	$stamp = strtotime($posts['post_time']);
	$posted = date('M d, Y g:i a', $stamp);
	$auth = $posts['name'];
	$postinfo = "<i><small>".$posted." by ".$auth."</i></small>";
	$postlink = "<a href='#'>Read More</a>";
	$postid = $posts['postID'];
	$pic = '<img class="pull-left" height="75" src="../images/blog/'.$postid.'"/>';	
	
	$post = new altpanel();
		$post->set_type("primary");
		$post->set_size("12");
		$post->set_title($title);
		$post->set_content($pic.$body);
		$post->set_footer($postinfo."&nbsp&nbsp".$postlink);
	$post->makepanel();
}
?>