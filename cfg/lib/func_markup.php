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
		global $siteurl;
		echo "<a href='".$siteurl."/page/".$url."'>";
		echo $content;
		echo "</a>";
	}
	function startlink($address) {
		global $siteurl;
		echo "<a href='".$siteurl."/page/".$address."'>";
	}
	function extlink($title,$address) {
		echo "<a href='".$address."'>";
		echo $title;
		echo "</a>";
	}
	function makelabel($type,$text) {
		echo "<p><span class='label label-".$type."'>".$text."</span></p>";
	}
	function inlinelabel($type,$text) {
		echo "<span class='label label-".$type."'><h3>".$text."</h3></span>";
	}
	function image($cat,$id) {
		echo "<img src='/images/".$cat."/".$id."/'>";
		}
?>
