<?php
$adduser = $_POST['addusr'];
//echo $mysqli->error;
if (isset($adduser)) {
	$nuusername = $_POST['username'];
	$nupassword = (md5($_POST['pswd']));
	$nuemail = $_POST['email'];
	$nulevel = $_POST['userlevel'];
	$insuser = "INSERT INTO users (username,email,userpass,userlevel) VALUES (:un,:em,:ps,:ul)";
	//$add = $mysqli->prepare($addstmt);
	$makenewuser = $dbh->prepare($insuser);
	if($makenewuser->execute(array(':un'=>$nuusername,
		':em'=>$nuemail,
		':ps'=>$nupassword,
		':ul'=>$nulevel))) {

	//$add->bind_param("sssi", $nuusername, $nuemail, $nupassword, $nulevel);
	//if ($add->execute()) {
		$added = "User added!";
		$success = new alert(success,$added);
		$success->showalert();
	}
	else {
		$err = "An error was encountered during this operation.";
		$fail = new alert(danger,$err);
		$fail->showalert();
	}
	//$add->close();
}

include('templates/admin_user_add.php');

?>

