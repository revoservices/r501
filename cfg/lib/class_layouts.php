<?php
class Layout 
{
	var $type;
	var $content;
	var $pgname;
	var $ownrow;
	
	function __construct(
	$type = null,
	$content = null,
	$pgname = null,
	$ownrow = null) 
	{
		$this->type = $type;
		$this->content = $content;
		$this->pgname = $pgname;
		$this->ownrow = $ownrow;
	}

}

class quarterPage extends Layout 
{
	function render() 
	{
		global $mysqli;
		if ($this->ownrow == "true") 
		{
			echo "<div class='row'>";
		}
		echo "<div class='col-3 col-lg-3'>";
		switch ($this->type)
		{
			case "file":
			include('pages/'.$this->pgname.'.php');
			break;
		}
		echo "</div>";
		if ($this->ownrow == "true") 
		{
			echo "</div>";
		}
	}
}

class thirdPage extends Layout 
{
	function render() 
	{
		global $mysqli;
		if ($this->ownrow == "true") 
		{
			echo "<div class='row'>";
		}
		echo "<div class='col-4 col-lg-4'>";
		switch ($this->type)
		{
			case "file":
			include('pages/'.$this->pgname.'.php');
			break;
		}
		echo "</div>";
		if ($this->ownrow == "true") 
		{
			echo "</div>";
		}
	}
}

class halfPage extends Layout 
{
	function render() 
	{
		global $mysqli;
		if ($this->ownrow == "true") 
		{
			echo "<div class='row'>";
		}
		echo "<div class='col-6 col-lg-6'>";
		switch ($this->type)
		{
			case "file":
			include('pages/'.$this->pgname.'.php');
			break;
		}
		echo "</div>";
		if ($this->ownrow == "true") 
		{
			echo "</div>";
		}
	}
}

class fullPage extends Layout 
{
	function render() 
	{
		global $mysqli;
		if ($this->ownrow == "true") 
		{
			echo "<div class='row'>";
		}
		echo "<div class='col-12 col-lg-12'>";
		switch ($this->type)
		{
			case "file":
			include('pages/'.$this->pgname.'.php');
			break;
		}
		echo "</div>";
		if ($this->ownrow == "true") 
		{
			echo "</div>";
		}
	}
}

?>
