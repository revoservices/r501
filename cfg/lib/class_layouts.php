<?php
class Layout 
{
	var $type;
	var $content;
	var $pgname;
	var $title;
	var $ownrow;
	var $showtitle;
	
	function __construct(
	$type = null,
	$content = null,
	$pgname = null,
	$title = null,
	$showtitle = null,
	$ownrow = null) 
	{
		$this->type = $type;
		$this->content = $content;
		$this->pgname = $pgname;
		$this->title = $title;
		$this->showtitle = $showtitle;
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
		
		echo "<div class='col-3 col-md-3 col-lg-3'>";
		if ($this->showtitle == "1") 
		{
			echo "<legend>".$this->title."</legend>";
		}
		switch ($this->type)
		{
			case "file":
			include('pages/'.$this->pgname.'.php');
			break;

			case "template":
			include('templates/'.$this->pgname.'.php');
			break;

			case "sql":
				$query = "SELECT * FROM `content` WHERE `content`.`name` = '$this->pgname'";
				$getpage = $mysqli->query($query);
				while ($data = $getpage->fetch_assoc())
				{
					$cont = $data['content'];
					//echo "<h2>".$data['title']."</h2>";
					eval( $cont );
				}
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
		echo "<div class='col-4 col-md-4 col-lg-4'>";
		if ($this->showtitle == "1") 
		{
			echo "<legend>".$this->title."</legend>";
		}
		switch ($this->type)
		{
			case "file":
			include('pages/'.$this->pgname.'.php');
			break;

			case "template":
			include('templates/'.$this->pgname.'.php');
			break;

			case "sql":
				$query = "SELECT * FROM `content` WHERE `content`.`name` = '$this->pgname'";
				$getpage = $mysqli->query($query);
				while ($data = $getpage->fetch_assoc())
				{
					$cont = $data['content'];
					//echo "<h2>".$data['title']."</h2>";
					eval( $cont );
				}
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
		echo "<div class='col-6 col-md-6 col-lg-6'>";
		if ($this->showtitle == "1") 
		{
			echo "<legend>".$this->title."</legend>";
		}
		switch ($this->type)
		{
			case "file":
				include('pages/'.$this->pgname.'.php');
			break;

			case "template":
			include('templates/'.$this->pgname.'.php');
			break;

			case "sql":
				$query = "SELECT * FROM `content` WHERE `content`.`name` = '$this->pgname'";
				$getpage = $mysqli->query($query);
				while ($data = $getpage->fetch_assoc())
				{
					$cont = $data['content'];
					//echo "<h2>".$data['title']."</h2>";
					eval( $cont );
				}
			break;
		}
		echo "</div>";
		if ($this->ownrow == "true") 
		{
			echo "</div>";
		}
	}
}

class twoThirds extends Layout 
{
	function render() 
	{
		global $mysqli;
		if ($this->ownrow == "true") 
		{
			echo "<div class='row'>";
		}
		echo "<div class='col-9 col-md-9 col-lg-9'>";
		if ($this->showtitle == "1") 
		{
			echo "<legend>".$this->title."</legend>";
		}
		switch ($this->type)
		{
			case "file":
				include('pages/'.$this->pgname.'.php');
			break;

			case "template":
			include('templates/'.$this->pgname.'.php');
			break;

			case "sql":
				$query = "SELECT * FROM `content` WHERE `content`.`name` = '$this->pgname'";
				$getpage = $mysqli->query($query);
				while ($data = $getpage->fetch_assoc())
				{
					$cont = $data['content'];
					//echo "<h2>".$data['title']."</h2>";
					eval( $cont );
				}
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
		echo "<div class='col-12 col-md-12 col-lg-12'>";
		if ($this->showtitle == "1") 
		{
			echo "<legend>".$this->title."</legend>";
		}
		switch ($this->type)
		{
			case "file":
			include('pages/'.$this->pgname.'.php');
			break;

			case "template":
			include('templates/'.$this->pgname.'.php');
			break;

			case "sql":
				$query = "SELECT * FROM `content` WHERE `content`.`name` = '$this->pgname'";
				$getpage = $mysqli->query($query);
				while ($data = $getpage->fetch_assoc())
				{
					$cont = $data['content'];
					//echo "<h2>".$data['title']."</h2>";
					eval( $cont );
				}
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
