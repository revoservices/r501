<?php
$coding = $mysqli->query("SELECT * FROM `content` WHERE `content_id` = 5");
$content = $coding->fetch_assoc();
print $content['title'];
$pagetype = $content['type'];
if ($pagetype == "static") {
print $content['body'];
}
else {
eval ($content['body']);
}

?>
