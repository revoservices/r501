<?php

$mysqli = new mysqli("localhost", "revosvc", "p0lidef01", "iptv");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$dbu = "revosvc";
$dbp = "p0lidef01";
$dbh = new PDO('mysql:host=localhost;dbname=iptv', $dbu, $dbp);

?>
