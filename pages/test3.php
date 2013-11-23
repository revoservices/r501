<?php
//$pagename = $_GET['view'];
$page1 = "main";
$page2 = "about";

$hp = new halfPage();
$hp->type = "file";
$hp->ownrow = "true";
$hp->pgname = $page1;
$hp->render();

$hp2 = new halfPage();
$hp2->type = "sql";
$hp2->title = "About Page";
$hp2->showtitle = "1";
$hp2->pgname = $page2;
$hp2->render();
?>

