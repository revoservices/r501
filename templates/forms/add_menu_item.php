<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>New Menu Item</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="parent">Parent Menu</label>
  <div class="col-8 col-md-8 col-lg-8">
    <select id="parent" name="parent" class="form-control">
      <option value="1">Main</option>
      <option value="2">Users</option>
      <option value="3">User Options</option>
      <option value="4">Admin</option>
      <option value="5">Super Admin</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="itemclass">Class</label>
  <div class="col-8 col-md-8 col-lg-8">
    <select id="itemclass" name="itemclass" class="form-control">
      <option value="li">Linked Item</option>
      <option value="dropdown-header">Dropdown Header</option>
      <option value="divider">Divider</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="linkname">Display Name</label>  
  <div class="col-8 col-md-8 col-lg-8">
  <input id="linkname" name="linkname" type="text" placeholder="Name to appear in menu" class="form-control input-md">
  <span class="help-block">Keep it short!</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="destination">Destination</label>  
  <div class="col-8 col-md-8 col-lg-8">
  <input id="destination" name="destination" type="text" placeholder="Page to link to" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-4 col-md-4 col-lg-4 control-label" for="newitem">Add Item</label>
  <div class="col-8 col-md-8 col-lg-8">
    <button id="newitem" name="newitem" class="btn btn-success">Submit</button>
    <button id="reset" name="reset" class="btn btn-warning">Go Back</button>
  </div>
</div>

</fieldset>
</form>
