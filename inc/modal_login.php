  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Login to <?php echo $sitename; ?></h4>
        </div>
        <div class="modal-body">
  <form class="form-horizontal" action="../login/" method="post">
<div class="form-group">
                           <label class="col-lg-2 control-label">Username </label>
<div class="col-10 col-lg-10">
		<input class="form-control" type="text" placeholder="Username" name="user">
</div>
</div>
<div class="form-group">

			<label class="col-lg-2 control-label">Password: </label>
<div class="col-10 col-lg-10">

                            <input class="form-control" type="password" placeholder="Password" name="password">
</div>

</div>
                       
      </div>
        <div class="modal-footer">
<div class="form-group">

<button type="submit" class="btn btn-success btn-large pull-right" name="loginclick">Sign in</button></div> </form>
<div class="pull-left">
    <a href="<?php echo $siteurl; ?>" class="btn btn-small btn-info">Back to Main Site</a>
    <a href="../signup/" class="btn btn-small btn-primary">Register</a>
    <a href="?action=reset_password" class="btn btn-small btn-warning">Reset Password</a>

</div>
   </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->