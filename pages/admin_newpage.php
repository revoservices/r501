<?php
$newpage = new Form();
	$newpage->action = "../admin_newpage/";
	$newpage->method = "post";
	$newpage->style = "form-horizontal";
	$newpage->legend = "Create A New Page";
$newpage->start();

$title = new formGroup();
	$title->label = "Page Title";
	$title->labelsize = "4";
	$title->type = "text";
	$title->id = "pagetitle";
	$title->name = "pagetitle";
	$title->inputsize = "8";
	$title->placeholder = "Title of page";
$title->renderGroup();

$name = new formGroup();
	$name->label = "Page name";
	$name->labelsize = "4";
	$name->type = "text";
	$name->id = "pagename";
	$name->name = "pagename";
	$name->inputsize = "8";
	$name->placeholder = "name of page";
$name->renderGroup();

$body = new formGroup();
	$body->label = "Page body";
	$body->labelsize = "4";
	$body->type = "textarea";
	$body->id = "pagebody";
	$body->name = "pagebody";
	$body->inputsize = "8";
	$body->placeholder = "body of page";
$body->renderGroup();

$submit = new formGroup();
	$submit->type = "button";
	$submit->style = "success";
	$submit->id = "submit";
	$submit->name = "submit";
	$submit->value = "submit";
	$submit->action = "submit";
	$submit->text = "Update Options";
$submit->renderGroup();

$newpage->end();
?>

