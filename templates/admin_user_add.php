<form class="form-horizontal" method="post" action="../admin_user_add/">
<fieldset>

<!-- Form Name -->
<legend>Add User</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="User Login Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="pswd" name="pswd" type="password" placeholder="User Password" class="form-control input-md" required="">
    <span class="help-block">At least 8 chars</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="user@email.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="userlevel">User Level</label>
  <div class="col-md-4">
    <select id="userlevel" name="userlevel" class="form-control">
      <option value="2">User</option>
      <option value="3">Moderator</option>
      <option value="4">Administrator</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="addusr"></label>
  <div class="col-md-4">
    <button id="addusr" name="addusr" class="btn btn-primary" value="addusr" type="submit">Add User</button>
  </div>
</div>

</fieldset>
</form>

