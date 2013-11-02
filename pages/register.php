<?php
if($reg_open == "1") {
include('templates/form_signup.php');
}
else {
$closed = new alert(danger,"Signups are currently closed.");
$closed->showalert();
}
?>