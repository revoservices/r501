<?php
class Form {
	var $style;
	var $action;
	var $method;
	var $legend;
	var $inputs;
	
	function __construct(
		$style = null,
		$action = null,
		$method = null,
		$legend = null,
		$inputs = null) {
		$this->style = $style;
		$this->action = $action;
		$this->method = $method;
		$this->legend = $legend;
		$this->inputs = $inputs;
	}

	function render() {
		$output = "<form class='".$this->style."' action='".$this->action."' method='".$this->method."'>";
		foreach ($this->inputs as $input) {
			$output .= $input->render();
		}
		$output .= "</form>";
		return output;
	}
	function start() {
		$output = "<form class='".$this->style."' action='".$this->action."' method='".$this->method."'>";
		$output .= "<legend>".$this->legend."</legend>";
		echo $output;
	}
	function end() {
		$formend = "</form>";
		echo $formend;
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
	var $autocomplete;
	var $value;
	var $checked;
	var $action;
	var $text;
	var $helpblock;
	
	/** Most properties are optional.
	* $this->type is required so it can render correctly
	**/
	function __construct($label = null, 
 		$labelsize = null, 
 		$type = null, 
 		$style = null, 
 		$id = null, 
 		$name = null, 
 		$value = null, 
 		$inputsize = null, 
 		$required = null, 
 		$placeholder = null,
		$autocomplete = null, 
 		$checked = null, 
 		$action = null, 
 		$text = null,
		$helpblock = null) {
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
		$this->autocomplete = $autocomplete;
		$this->checked = $checked;
		$this->action = $action;
		$this->text = $text;
		$this->helpblock = $helpblock;
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
		$inputdefault = "<input id='".$this->id."' name='".$this->name."' type='".$this->type."'";
		echo "<div class='form-group'>";
 		echo "<label class='col-md-".$this->labelsize." control-label' for='".$this->name."'>";
		echo $this->label."</label>";  
 		echo "<div class='col-md-".$this->inputsize."'>";

		//Handles different types of inputs
		switch ($this->type) {
			case "text":
  				$input  = $inputdefault;
				if ($this->required == "1") {
					$input .= " required";
				}
				if ($this->autocomplete == "off") {
					$input .= " autocomplete='off'";
				}
				$input .= " placeholder='".$this->placeholder."' value='".$this->value."' class='form-control input-md'>";
				break;
			case "password":
				$input  = $inputdefault;
				if ($this->required == "1") {
					$input .= " required";
				}
				if ($this->autocomplete == "off") {
					$input .= " autocomplete='off'";
				}
				$input .= " placeholder='".$this->placeholder."' value='".$this->value."' class='form-control input-md'>";
				break;
			case "checkbox":
				$input = "<label class='checkbox'>";
				$input  .= $inputdefault;
				if ($this->checked == "1") {
					$input .= " checked='checked'";
				}
				$input .= ">".$this->text;
				$input .= "</label>";
				
			break;
			case "file":
				$input = $inputdefault;
				$input .= "class='file-input'>";
			break;
			case "button":
				$input = "<button type='".$this->action."' name='".$this->name."'";
				$input .= " value='".$this->value."' class='btn btn-".$this->style."'>";
				$input .= $this->text."</button>";
				break;
		}
		print $input; //render the input
		if (isset($this->helpblock)) {
			$hb = "<span class='help-block'>".$this->helpblock."</span>";
			print $hb; //print help block if set
		}
   		 echo "</div></div>";	
	}
}

?>
