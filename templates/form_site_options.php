
<?php
$formAction = "../suadmin_options/";
$formMethod = "POST";
$formLegend = "Site Configuration";
beginForm($formAction,$formMethod,$formLegend);

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

?>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="siteurl">Base url</label>  
  <div class="col-md-5">
  <input id="siteurl" name="siteurl" type="text" placeholder="http://yoursite.com" value="<?php echo $opt['siteurl']; ?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="logo">Site Logo</label>  
  <div class="col-md-5">
  <input id="logo" name="logo" type="text" placeholder="Logo File" value="<?php echo $opt['sitelogo']; ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="maintmode">Maintenance Mode</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="maintmode-0">
      <input type="radio" name="maintmode" id="maintmode-0" value="1" <?php 
if($opt['maint_mode'] == "1") { 
echo " checked='checked'>";
} else {
echo ">";
}
?>
      Enabled
    </label> 
    <label class="radio-inline" for="maintmode-1">
      <input type="radio" name="maintmode" id="maintmode-1" value="0" <?php 
if($opt['maint_mode'] == "0") { 
echo " checked='checked'>";
} else {
echo ">";
}
?>
      Disabled
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enablereg">Registration</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="enablereg-0">
      <input type="radio" name="enablereg" id="enablereg-0" value="1" <?php 
if($opt['reg_open'] == "1") { 
echo " checked='checked'>";
} else {
echo ">";
}
?>
      Enabled
    </label> 
    <label class="radio-inline" for="enablereg-1">
      <input type="radio" name="enablereg" id="enablereg-1" value="0" <?php 
if($opt['reg_open'] == "0") { 
echo " checked='checked'>";
} else {
echo ">";
}
?>
      Disabled
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
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

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="updateprefs">Update Options</label>
  <div class="col-md-4">
    <button id="updateprefs" name="updateprefs" class="btn btn-primary">Submit</button>
  </div>
</div>
<?php
endForm();
?>
