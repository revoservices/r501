<?php
/**
* Use this object to generate an alert
*
* @param string $type default, primary, info, danger, success
* @param string $content Can be quoted or called from variable
* @package interface
*
*/
	class alert {
		var $content;
		var $type;
			function __construct($type,$content) {
				$this->type = $type;
				$this->content = $content;
			}
			function showalert() {
				echo "<div class='alert alert-".$this->type."'>";
				echo $this->content;
				echo "</div>";
			}
	}
?>