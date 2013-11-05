<?php
/**
* Create a link
*
* Generates a link based on two inputs.
*
* @package generators
*
*/
	function makelink($content,$url) {
		echo "<a href='".$siteurl."/page/".$url."'>";
		echo $content;
		echo "</a>";
	}
	function startlink($address) {
		echo "<a href='".$siteurl."/page/".$address."'>";
	}
?>
