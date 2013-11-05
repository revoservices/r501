<?php
$dbs = "localhost";
$dbu = "/*change this*/";
$dbp = "/*change this*/";
$dbt = "/*change this*/";
$mysqli = new mysqli($dbs, $dbu, $dbp, $dbt);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$dbh = new PDO('mysql:host=localhost;dbname=/*change this*/', $dbu, $dbp);

?>
