<?php
/**
* API Objects to create content panels
*
* @author Jeff Brown <jbrown@candojax.org>
*
*/

/** 
* Create a standard panel
* 
* @api
*
* @param string $title Can be quoted or called from variable
* @param string $body Can be quoted or called from variable
* @param string $footer Can be quoted or called from variable
* @param int $size A number 1-12
* @param string $style default, primary, info, danger, success
*
* @package interface
*
*/

	class panel {
		var $title;
		var $body;
		var $footer;
		var $size;
		var $style;
			function __construct($size = null,
				$style = null,
				$title = null,
				$body = null,
				$footer = null) {
				$this->size = $size;
				$this->style = $style;
				$this->title = $title;
				$this->body = $body;
				$this->footer = $footer;
			}
			function showpanel() {
				echo "<div class='col-sm-".$this->size." col-md-".$this->size." col-lg-".$this->size." col-".$this->size."'>";
				echo "<div class='panel panel-".$this->style."'>";
				echo "<div class='panel-heading'>";
				echo "<h3 class='panel-title'>".$this->title."</h3></div>";
				echo "<div class='panel-body'>".$this->body."</div>";
				if (isset($this->footer)) {
				echo "<div class='panel-footer'>".$this->footer."</div>";
				}
				echo "</div></div>";
			}
	}

/**
* More fine-tuned approach to OO panel building
*
* @api
*
* @version 2.0
*
* @param int $psize A number 1-12, [$object->set_size($int)]
* @param string $ptype Danger, info, primary, default, success [->set_type($str)]
* @param string $ptitle Title text [->set_title($str)]
* @param string $plead Lead text for marketing, etc [->set_lead($str)]
* @param string $pcontent Main body [->set_content($str)]
* @param string $pfooter Footer text [->set_footer($str)]
*
* @package interface
*
*/

class altpanel {
		var $psize;
		var $ptype;
		var $ptitle;
		var $plead;
		var $pcontent;
		var $pfooter;
		function set_size($psize) {
			$this->size = $psize;
		}
		function set_type($ptype) {
			$this->type = $ptype;
		}
		function set_title($ptitle) {
			$this->title = $ptitle;
		}
		function set_lead($plead) {
			$this->lead = $plead;
		}
		function set_content($pcontent) {
			$this->content = $pcontent;
		}
		function set_footer($pfooter) {
			$this->footer = $pfooter;
		}
		function makepanel() {
			echo "<div class='col-sm-".$this->size." col-md-".$this->size." col-lg-".$this->size." col-".$this->size."'>";
			echo "<div class='panel panel-".$this->type."'>";
			if (isset($this->title)) {
				echo "<div class='panel-heading'>";
				echo "<h3 class='panel-title'>".$this->title."</h3></div>";
			}
			echo "<div class='panel-body'>";
			if (isset($this->lead)) {
				echo "<h2 class='text-primary'>".$this->lead."</h2>";
			}
			echo $this->content; 
			echo "</div>";
			if (isset($this->footer)) {
                                echo "<div class='panel-footer'>".$this->footer."</div>";
                        }
                        echo "</div></div>";
		}

	}
?>
