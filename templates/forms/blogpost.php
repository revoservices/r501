<form class="form-horizontal" enctype="multipart/form-data" action="../admin_newpost/" method="post">
<fieldset>

<!-- Form Name -->
<legend>New Blog Post</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-5">
  <input id="title" name="title" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="visibility">Visibility</label>
  <div class="col-md-4">
    <select id="visibility" name="visibility" class="form-control">
      <option value="1">Public</option>
      <option value="2">Logged In</option>
      <option value="3">Jr. Admin</option>
      <option value="4">Admin Only</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="body">Content</label>
  <div class="col-md-4">
  <textarea class="form-control" id="body" name="body"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="postpic">Image</label>
  <div class="col-md-4">
    <input id="postpic" name="postpic" class="input-file" type="file">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Publish / Save</label>
  <div class="col-md-8">
    <button id="submit" type="submit" value="submit" name="submit" class="btn btn-success">Post</button>
    <button id="save" name="save" class="btn btn-info">Save</button>
  </div>
</div>

</fieldset>
</form>

