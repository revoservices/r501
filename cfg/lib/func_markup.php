<?php
/**
* Create a link
*
* Generates a link based on two inputs.
*
* @package generators
*
*/
	function newlink($content,$url) {
		echo "<a href='".$url."'>";
		echo $content;
		echo "</a>";
	}
?>
