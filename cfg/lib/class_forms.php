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
	var $id;
	var $name;
	var $inputsize;
	var $required;
	var $placeholder;
	var $value;
	var $checked;
	
	function __construct($label,$labelsize,$type,$id,$name,$value,$inputsize,$required,$placeholder,$checked) {
		$this->label = $label;
		$this->labelsize = $labelsize;
		$this->type = $type;
		$this->id = $id;
		$this->name = $name;
		$this->value = $value;
		$this->inputsize = $inputsize;
		$this->required = $required;
		$this->placeholder = $placeholder;
		$this->checked = $checked;
	}

	function render() {
		echo "<div class='form-group'>";
 		echo "<label class='col-".$this->labelsize." col-lg-".$this->labelsize." control-label' for='".$this->name."'>";
		echo $this->label."</label>";  
 		echo "<div class='col-md-".$this->inputsize."'>";
  		echo "<input id='".$this->id."' name='".$this->name."' type='".$this->type."' placeholder='".$this->placeholder."' value='".$this->value."' class='form-control input-md' required=''>";
   		 echo "</div></div>";	
	}
}

?>
