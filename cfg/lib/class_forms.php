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

class Formgroup {
	var $label;
	var $labelsize;
	var $type;
	var $style;
	var $id;
	var $name;
	var $inputsize;
	var $required;
	var $placeholder;
	var $value;
	var $checked;
	var $action;
	var $text;
	
	function __construct($label,$labelsize,$type,$style,$id,$name,$value,$inputsize,$required,$placeholder,$checked,$action,$text) {
		$this->label = $label;
		$this->labelsize = $labelsize;
		$this->type = $type;
		$this->style = $style;
		$this->id = $id;
		$this->name = $name;
		$this->value = $value;
		$this->inputsize = $inputsize;
		$this->required = $required;
		$this->placeholder = $placeholder;
		$this->checked = $checked;
		$this->action = $action;
		$this->text = $text;
	}
	function renderGroup() {
		if (!isset($this->labelsize)) {
			$this->labelsize = "4";
		}
		if (!isset($this->inputsize)) {
			$this->inputsize = "5";
		}
		if (!isset($this->label)) {
			$this->label = "";
		}
		echo "<div class='form-group'>";
 		echo "<label class='col-md-".$this->labelsize." control-label' for='".$this->name."'>";
		echo $this->label."</label>";  
 		echo "<div class='col-md-".$this->inputsize."'>";

		if ($this->required == "1") {
			$input .= " required";
		}
		switch ($this->type) {
			case "text":
  				$input  = "<input id='".$this->id."' name='".$this->name."' type='".$this->type."'";
				$input .= " placeholder='".$this->placeholder."' value='".$this->value."' class='form-control input-md'>";
				break;
			case "password":
				$input  = "<input id='".$this->id."' name='".$this->name."' type='".$this->type."'";
				$input .= " placeholder='".$this->placeholder."' value='".$this->value."' class='form-control input-md'>";
				break;
			case "button":
				$input = "<button type='".$this->action."' name='".$this->name."'";
				$input .= " value='".$this->value."' class='btn btn-".$this->style."'>";
				$input .= $this->text."</button>";
				break;
		}
		print $input;
   		 echo "</div></div>";	
	}
}

?>
