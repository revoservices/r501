<?php
isloggedin();
$e = new alert(success,$myemail);
$e->showalert();
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
<?php
$usrs = $mysqli->query("SELECT
 `users`.`userid`,
 `users`.`username`,
 `user_data`.`userid`,
 `user_data`.`name`,
 `user_data`.`email`,
 `user_data`.`location`,
 `user_data`.`dob`,
 `user_data`.`userpic`
 FROM `users`
 JOIN `user_data` ON `user_data`.`userid` = `users`.`userid`
 WHERE `user_data`.`userid` = '$userid' ");
while ($u = $usrs->fetch_object()) {

	if ($u->userpic == "") {
		echo "<img class='img-rounded img-responsive' src='holder.js/75x75'>";
	} else {
		echo "<img class='img-rounded img-responsive' src='../images/user/".$u->userid."'>";
	}
	echo "</div><div class='col-sm-6 col-md-8'>";
	echo "<h4>".$u->name."</h4>";
	echo "<small><cite title='".$u->location."'>".$u->location."<i class='glyphicon glyphicon-map-marker'></i></cite></small>";
	echo "<p><i class='glyphicon glyphicon-envelope'></i> ".$u->email."<br>";
	echo "<i class='glyphicon glyphicon-gift'></i> ".date('F d, Y',strtotime($u->dob))."</p>";

	echo "</div></div>";
}
?>
<!--
	echo $u->username;
	echo $u->name;

  <i class='glyphicon glyphicon-envelope'></i>email@example.com
                            <br />
                            <i class='glyphicon glyphicon-globe'></i><a href='http://www.jquery2dotnet.com'>www.jquery2dotnet.com</a>
                            <br />
                            <i class='glyphicon glyphicon-gift'></i>June 02, 1988</p> -->
                        <!-- Split button -->
                      <!--  <div class='btn-group'>
                            <button type='button' class='btn btn-primary'>
                                Social</button>
                            <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span><span class='sr-only'>Social</span>
                            </button>
                            <ul class='dropdown-menu' role='menu'>
                                <li><a href='#'>Twitter</a></li>
                                <li><a href='https://plus.google.com/+Jquery2dotnet/posts'>Google +</a></li>
                                <li><a href='https://www.facebook.com/jquery2dotnet'>Facebook</a></li>
                                <li class='divider'></li>
                                <li><a href='#'>Github</a></li>
                            </ul>
                        </div>
                    </div>
-->
                </div>
            </div>
        </div>
    </div>
</div>

