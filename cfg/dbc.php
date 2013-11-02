<?php
$dbs = "localhost";
$dbu = "revosvc";
$dbp = "p0lidef01";
$dbt = "iptv";
$mysqli = new mysqli($dbs, $dbu, $dbp, $dbt);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$dbh = new PDO('mysql:host=localhost;dbname=iptv', $dbu, $dbp);

?>
