<?php
isadmin();
if (isset($_POST['submit'])) {
         $fileName       = $_FILES[imgfile][name]; // image file name
          $tmpName     = $_FILES[imgfile][tmp_name]; // name of the temporary stored file name
          $fileSize           = $_FILES[imgfile][size]; // size of the uploaded file
          $fileType         = $_FILES[imgfile][type]; // file type
 
          $fp                    = fopen($tmpName, ‘r’); // open a file handle of the temporary file
          $imgContent  = fread($fp, filesize($tmpName)); // read the temp file
          fclose($fp); // close the file handle
//print_r($_POST);
//var_dump($_FILES);
//$pic = $_POST['postpic'];
//echo "<img src='".$pic."'>";
$pvis = $_POST['visibility'];
$ptitle = $_POST['title'];
$pbody = $_POST['body'];
$pauthor = $userid;
/*
$pub = "INSERT INTO `iptv`.`posts`
 (`post_vis`, `post_title`, `post_body`, `post_author`, `post_pic`)
 VALUES
 ($pvis, $ptitle, $pbody, $pauthor, $imgContent)";
*/
$pub = "INSERT INTO `iptv`.`posts` (`postID`, `post_vis`, `post_title`, `post_body`, `post_author`, `post_time`, `post_pic`) VALUES (NULL, '$pvis', '$ptitle', '$pbody', '$pauthor', CURRENT_TIMESTAMP, '$imgContent')";
if ($publish = $mysqli->query($pub)) {
echo "success!";
} else {
echo "fail :(";
var_dump($publish);
printf("Errormessage: %s\n", $mysqli->error);
}
}
include('templates/forms/blogpost.php');
?>
