<?php
/*
$mysqli = new mysqli("localhost", "revosvc", "p0lidef01", "R501");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

class dbc {
	public $mysqli = null;
	public function __construct() {
		include_once "cfg/dbc.php";
		$this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if ($this->mysqli->connect_errno) {
			echo "Error MySQLi: (".$this->mysqli->connect_errno.") ".$this->mysqli->connect_error;
			exit();
		}
	}
	public function query($query) {
		$this->stmt = $this->dbwork->query($sql);
		$this->results = $this->stmt->fetch_assoc();
		return $this->results;
	
	}
		
}
*/

class getresults {
	var $tablename;
	function getdata($tablename) {
		include_once "cfg/dbc.php";

		$sql = "SELECT * FROM `users`";
		$stmt = $mysqli->query($sql);
		$this->results = $stmt->fetch_assoc();
		return $this->results;
	}
}	
	//function buildquery
	//function __construct($tablename)


?>