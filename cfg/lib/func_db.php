<?php
function selectField($tablename,$field,$match,$comp) {
global $mysqli;
$sql = "SELECT `".$field."` FROM `".$tablename."`";
	if (isset($match)) {
		$sql .= " WHERE `".$comp."` = '$match'";
	}
$stmt = $mysqli->query($sql);
	while ($results = $stmt->fetch_assoc()) {
		$res[] = $results[$field];
		$retvals = array($res);
	}
return $retvals;
}


?>
