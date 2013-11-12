<div class="col-6 col-sm-6 col-lg-6">
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
</div>


<div class="col-6 col-sm-6 col-lg-6">

<div class="panel" id="hubInfo"></div>
<script>
$("#hubInfo").hubInfo({ 
    user: "revoservices",
    repo: "r501"
});
hubInfo.on('render', function() {
    $('<a href="https://twitter.com/share" class="twitter-share-button" data-via="JGAui">Tweet</a>').insertAfter('.repo-forks');
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
});
</script>

<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title">Test</h3>
</div><div class="panel-body">
Stupid Flanders<Br>Screw Flanders<br><img src="../images/blog/2/">
</div></div>


<video width="320" height="240" controls id="demo1">
<source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720_512kb.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>

</div>

