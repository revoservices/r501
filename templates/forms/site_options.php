
<?php
/*
$formAction = "../suadmin_options/";
$formMethod = "POST";
$formLegend = "Site Configuration";
beginForm($formAction,$formMethod,$formLegend);
*/
$siteconfig = new Form();
	$siteconfig->action = "../suadmin_options/";
	$siteconfig->method = "POST";
	$siteconfig->legend = "Site Configuration";
	$siteconfig->style = "form-horizontal";
$siteconfig->start();

$sname = new formGroup();
	$sname->label = "Site Name";
	$sname->labelsize = "4";
	$sname->type = "text";
	$sname->id = "sitename";
	$sname->name = "sitename";
	$sname->value = $opt['sitename'];
	$sname->inputsize = "5";
	$sname->required = "1";
	$sname->placeholder = "Name of Your Site";
$sname->renderGroup();

$tag = new formGroup();
	$tag->label = "Tagline";
	$tag->labelsize = "4";
	$tag->type = "text";
	$tag->id = "tagline";
	$tag->name = "tagline";
	$tag->value = $opt['sitetag'];
	$tag->inputsize = "5";
	$tag->required = "1";
	$tag->placeholder = "A catchy slogan";
$tag->renderGroup();

$sowner = new formGroup();
	$sowner->label = "Owner";
	$sowner->labelsize = "4";
	$sowner->type = "text";
	$sowner->id = "owner";
	$sowner->name = "owner";
	$sowner->value = $opt['siteowner'];
	$sowner->inputsize = "5";
	$sowner->required = "1";
	$sowner->placeholder = "Your name or company";
$sowner->renderGroup();

$surl = new formGroup();
	$surl->label = "Base URL";
	$surl->labelsize = "4";
	$surl->type = "text";
	$surl->id = "siteurl";
	$surl->name = "siteurl";
	$surl->value = $opt['siteurl'];
	$surl->inputsize = "5";
	$surl->required = "1";
	$surl->placeholder = "http://www.yoursite.com";
$surl->renderGroup();

$slogo = new formGroup();
	$slogo->label = "Logo";
	$slogo->labelsize = "4";
	$slogo->type = "text";
	$slogo->id = "sitelogo";
	$slogo->name = "sitelogo";
	$slogo->value = $opt['sitelogo'];
	$slogo->inputsize = "5";
	$slogo->required = "1";
	$slogo->placeholder = "/images/site/1/";
//$slogo->renderGroup();

$uploadlogo = new formGroup();
	$uploadlogo->label = "Logo";
	$uploadlogo->labelsize = "4";
	$uploadlogo->type = "file";
	$uploadlogo->id = "sitelogo";
	$uploadlogo->name = "sitelogo";
	//$uploadlogo->value = $opt['sitelogo'];
	$uploadlogo->inputsize = "5";
	$uploadlogo->required = "1";
	//$uploadlogo->placeholder = "/images/site/1/";
	$uploadlogo->helpblock = "PNG, GIF, and JPG files only. Recommended height is 55px."; //image('site','1');
$uploadlogo->renderGroup();

$uselogo = new formGroup();
	$uselogo->label = "Use Logo";
	$uselogo->labelsize = "4";
	$uselogo->type = "checkbox";
	$uselogo->id = "uselogo";
	$uselogo->name = "uselogo";
	$uselogo->value = $opt['use_logo'];
	if ($opt['use_logo'] == "1") {
		$uselogo->checked = "1";
	} else {
		$uselogo->checked = "0";
	}
	$uselogo->text = "Enable";
	$uselogo->inputsize = "5";
	$uselogo->required = "1";
	$uselogo->helpblock = "If disabled, site name will be used instead.";
$uselogo->renderGroup();

$allowlogin = new formGroup();
	$allowlogin->label = "Allow Login";
	$allowlogin->labelsize = "4";
	$allowlogin->type = "checkbox";
	$allowlogin->id = "allowlogin";
	$allowlogin->name = "allowlogin";
	$allowlogin->value = $opt['enable_login'];
	if ($opt['enable_login'] == "1") {
		$allowlogin->checked = "1";
	} else {
		$allowlogin->checked = "0";
	}
	$allowlogin->text = "Enable";
	$allowlogin->inputsize = "5";
	$allowlogin->required = "1";
$allowlogin->renderGroup();

$allowreg = new formGroup();
	$allowreg->label = "Allow Registration";
	$allowreg->labelsize = "4";
	$allowreg->type = "checkbox";
	$allowreg->id = "allowreg";
	$allowreg->name = "allowreg";
	$allowreg->value = $opt['reg_open'];
	if ($opt['reg_open'] == "1") {
		$allowreg->checked = "1";
	} else {
		$allowreg->checked = "0";
	}
	$allowreg->text = "Enable";
	$allowreg->inputsize = "5";
	$allowreg->required = "1";
$allowreg->renderGroup();

$maintmode = new formGroup();
	$maintmode->label = "Maintenance Mode";
	$maintmode->labelsize = "4";
	$maintmode->type = "checkbox";
	$maintmode->id = "maintmode";
	$maintmode->name = "maintmode";
	$maintmode->value = $opt['maint_mode'];
	if ($opt['maint_mode'] == "1") {
		$maintmode->checked = "1";
	} else {
		$maintmode->checked = "0";
	}
	$maintmode->text = "Enable";
	$maintmode->inputsize = "5";
	$maintmode->required = "1";
$maintmode->renderGroup();

$submit = new formGroup();

	$submit->type = "button";
	$submit->style = "success";
	$submit->id = "submit";
	$submit->name = "submit";
	$submit->value = "submit";
	$submit->action = "submit";
	$submit->text = "Update Options";
$submit->renderGroup();

$siteconfig->end();
//endForm();
?>




<!-- Multiple Radios (inline) 
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="login-0">
      <input type="radio" name="login" id="login-0" value="1" <?php 
if($opt['enable_login'] == "1") { 
echo " checked='checked'>";
} else {
echo ">";
}
?>
      Enabled
    </label> 
    <label class="radio-inline" for="login-1">
      <input type="radio" name="login" id="login-1" <?php 
if($opt['enable_login'] == "0") { 
echo " checked='checked'>";
} else {
echo ">";
}
?>
      Disabled
    </label>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="logo">Site Logo</label>  
  <div class="col-md-5">
  <input id="logo" name="logo" type="text" placeholder="Logo File" value="<?php echo $opt['sitelogo']; ?>" class="form-control input-md">
 <br>
<img src="<?php echo $opt['sitelogo']; ?>">   
  </div>
</div>
-->
<!-- Button -->


