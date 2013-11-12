<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>New Menu</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="menuclass">Class</label>
  <div class="col-8 col-md-8 col-lg-8">
    <select id="menuclass" name="menuclass" class="form-control">
      <option value="bar">Horizontal</option>
      <option value="dropdown-menu">Dropdown</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="menuvis">Security</label>
  <div class="col-8 col-md-8 col-lg-8">
    <select id="menuvis" name="menuvis" class="form-control">
      <option value="1">Public</option>
      <option value="2">Users</option>
      <option value="3">Admin</option>
      <option value="4">Super Admin</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="menualign">Alignment</label>
  <div class="col-8 col-md-8 col-lg-8">
    <select id="menualign" name="menualign" class="form-control">
      <option value="left">Left</option>
      <option value="right">Right</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="linkname">Name</label>  
  <div class="col-8 col-md-8 col-lg-8">
  <input id="linkname" name="linkname" type="text" placeholder="Internal menu name" class="form-control input-md">
  <span class="help-block">Keep it short!</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="ddtext">Dropdown Label</label>  
  <div class="col-8 col-md-8 col-lg-8">
  <input id="ddtext" name="ddtext" type="text" placeholder="Dropdown Title" class="form-control input-md">
  <span class="help-block">Only required for dropdown menus</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="glyph">Menu Glyph</label>  
  <div class="col-8 col-md-8 col-lg-8">
  <input id="glyph" name="glyph" type="text" placeholder="Glyph name" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="enabled">Visibility</label>
  <div class="col-8 col-md-8 col-lg-8">
    <label class="checkbox-inline" for="enabled-0">
      <input type="checkbox" name="enabled" id="enabled-0" value="1">
      Enabled
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="newmenu">Add Menu</label>
  <div class="col-8 col-md-8 col-lg-8">
    <button id="newmenu" name="newmenu" class="btn btn-success">Submit</button>
    <button id="reset" name="reset" class="btn btn-warning">Go Back</button>
  </div>
</div>

</fieldset>
</form>

