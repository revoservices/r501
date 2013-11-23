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
<img src="../images/blog/2/">
</div></div>


<video width="320" height="240" controls id="demo1">
<source src="http://ia700305.us.archive.org/18/items/CopyingIsNotTheft/CINT_Nik_H264_720_512kb.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>