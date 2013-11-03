<?php

function beginForm($action,$method,$legend) {
	if (!isset($method)) {
		$method = "post";
	}
	echo "<form class='form-horizontal' method='".$method."' action='../".$action."/'><fieldset>";
	echo "<legend>".$legend."</legend>";
}

function endForm() {
	echo "</fieldset></form>";
}
?>
