<html><head>
<?php
	require('cfg/styles.php'); 
	require('cfg/js.php');
	require_once('cfg/functions.php');
	require_once('cfg/classes.php');
?>
</head><body>
<div class="container">

<?php
$cfgfile = 'cfg/dbca.php';
$cfgexists = "r501 appears to be installed already. Please delete the configuration file to continue.";
if (file_exists($cfgfile)) {
	$cfgex = new alert("danger",$cfgexists);
	$cfgex->showalert();
 
} else {
	include('pages/install.php');
}

?>
</div>
</body>
