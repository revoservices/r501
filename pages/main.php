<?php
$blogmain = new halfPage();
$blogmain->type = "template";
$blogmain->pgname = "blog_main";
$blogmain->render();

$rightfill = new halfPage();
$rightfill->type = "template";
$rightfill->pgname = "rightside_fill";
$rightfill->render();
?>


