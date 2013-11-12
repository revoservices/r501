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
$hp2->type = "file";
$hp2->pgname = $page2;
$hp2->render();
?>
