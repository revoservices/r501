<?php

$mysqli = new mysqli("localhost", "revosvc", "p0lidef01", "iptv");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

define("DB_SERVER", "localhost");
define("DB_USER", "revosvc");
define("DB_PASS", "p0lidef01");
define("DB_NAME", "iptv");

$dbu = "revosvc";
$dbp = "p0lidef01";
$dbh = new PDO('mysql:host=localhost;dbname=iptv', $dbu, $dbp);

?>
