<?php
/**
* Basic form functions
* Package: formWrapper
* TODO: Radio, Selectbox, Combobox
**/
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
		$inputs = null) 
	{
		$this->style = $style;
		$this->action = $action;
		$this->method = $method;
		$this->legend = $legend;
		$this->inputs = $inputs;
	}

	// !!!!DEPRECIATED!!!!
	function render() 
	{
		$output = "<form class='form ".$this->style."' action='".$this->action."' method='".$this->method."'>";
		foreach ($this->inputs as $input) 
		{
			$output .= $input->render();
		}
		$output .= "</form>";
		return output;
	}
	
	/**
	* Echo markup to start form
	* Usage: 
	* formName = new Form();
	* formName->style = "chosen_form_class" (horizontal, inline, etc.)
	* formName->method = "form_method" ($_POST, $_GET, etc.)
	* formName->action = "processor_page"
	* formname->legend = "form_title" (displayed with <h2> and an <hr>)
	* formName->start()
	**/	
	function start() 
	{
		$output = "<form class='".$this->style."' action='".$this->action."' method='".$this->method."'>";
		if (isset($this->legend)) 
		{
			$output .= "<legend>".$this->legend."</legend>";
		}		
		echo $output;
	}

	/**
	* Echo markup to start form
	* formName must match name defined with formname->start()
	* Usage: formName->end()
	**/
	function end() 
	{
		$formend = "</form>";
		echo $formend;
	}
}

/**
* Create the input groups
* Usage:
* $new_group = new Formgroup();
* $new_group->label = "label_text";
* $new_group->labelsize = "4";
* $new_group->autocomplete = "on"/"off"
* $new_group->renderGroup();
**/
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
	
	/**
	* Many properties are optional or type-specific.
	* (i.e. checked, placeholder, action
	* $this->type is required so it can render correctly
	**/
	function __construct($label = null, 
 		$labelsize = null, 
 		$type = null, // text, checkbox, textarea, button, password, file
 		$style = null, 
 		$id = null, 
 		$name = null, 
 		$value = null, 
 		$inputsize = null, 
 		$required = null, 
 		$placeholder = null,
		$autocomplete = null, 
 		$checked = null, 
 		$action = null,  // only for buttons
 		$text = null,
		$helpblock = null) 
	{
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

	/**
	* Render form group
	*
	* Package: formWrapper	
	* 
	*/
	function renderGroup() {
		// Set some default parameters
		if (!isset($this->type)) 
		{
			$this->type = "text";
		}
		if (!isset($this->labelsize)) 
		{
			$this->labelsize = "4";
		}
		if (!isset($this->inputsize)) 
		{
			$this->inputsize = "5";
		}
		if (!isset($this->label)) 
		{
			$this->label = "";
		}

		// Default way to start an input, used for most except textarea
		$inputdefault = "<input id='".$this->id."' name='".$this->name."' type='".$this->type."'";
		//Start rendering the group, starting with the label
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

			case "textarea":
				$input = "<textarea class='form-control' id='".$this->id."' name='".$this->name."'>";
				$input .= $this->value;
				$input .= "</textarea>";
			break;

			case "button":
				$input = "<button type='".$this->action."' name='".$this->name."'";
				$input .= " value='".$this->value."' class='btn btn-".$this->style."'>";
				$input .= $this->text."</button>";
				break;
		} // End input type switch

		print $input; //render the input
		if (isset($this->helpblock)) {
			$hb = "<span class='help-block'>".$this->helpblock."</span>";
			print $hb; //print help block if set
		}
   		 echo "</div></div>";	
	}
}

?>
