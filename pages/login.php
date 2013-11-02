<?php
if (isset($_POST['loginclick'])) {
	$usr = $_POST['user'];
	$pass = $_POST['password'];
	$pw = md5($pass);
$users = $mysqli->query("SELECT * FROM `users`
 JOIN `user_data` ON `user_data`.`userid` = `users`.`userid`
 WHERE `users`.`username` = '$usr' AND `users`.`userpass` = '$pw'");

	while ($u = $users->fetch_assoc()) {
		$_SESSION['userid'] = $u['userid'];
		$_SESSION['userlevel'] = $u['userlevel'];
		$_SESSION['myname'] = $u['name'];
		$_SESSION['myemail'] = $u['email'];
	}

	$count = $users->num_rows;

	if ($count == "0") { 
		$_SESSION['loggedin'] = "0";
		echo "<div class='alert alert-danger'>Login not recognized, try again.</div>";
	} else {
		$_SESSION['loggedin'] = "1";
		//echo "<div class='alert alert-success'>Welcome back!</div>";
		echo '<script> window.location="../main"; </script> ';
	}
	$users->close();

}
//include('templates/form_login.php');
?>
