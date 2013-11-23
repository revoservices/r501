<?php   
session_start();
include("templates/header.php");   

// Set the default name 
$action = 'main'; 
// Specify some disallowed paths 
$disallowed_paths = array('header', 'footer', 'install'); 
if (!empty($_GET['view'])) { 
    $tmp_action = basename($_GET['view']); 
    // If it's not a disallowed path, and if the file exists, update $action 
    if (!in_array($tmp_action, $disallowed_paths) && file_exists("pages/{$tmp_action}.php")) {
        $action = $tmp_action; } else { $action = '404'; }


} 
	if($maint_mode != "0" && $userlevel < "4") {
	$action = "maintenance";
	}

// Include $action 

//include("pages/$action.php"); 
if(!$getpage = $mysqli->query("SELECT * FROM `pages` WHERE '$action' = `pageurl`"))
{
	echo "hello";
	include("pages/404.php");
}
else
{
$makepage = $getpage->fetch_assoc();

	if ($makepage['showname'] == "1")
		{
			echo "<h2>".$makepage['pagename']."</h2>";
		}	
	eval( $makepage['pagecontent'] );

}
// Include Footer
include("templates/footer.php");
?>
