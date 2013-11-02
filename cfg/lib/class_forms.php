<?php
class Form {
	var $class;
	var $action;
	var $method;
	var $inputs;

	function render() {
		$output = "<form class='".$this->class."' action='".$this->action."' method='".$this->method."'>";
		foreach ($this->inputs as $input) {
			$output .= $input->render();
		}
		$output .= "</form>";
		return output;
	}
}
?>