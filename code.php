<?php
namespace User\Template;

class Code extends \Leeflets\Template\Code {
	function setup_hooks() {
		$this->enqueue_script( 'jquery-dropotron', 'js/jquery.dropotron.js', array( 'jquery'), '1.3.1' );
		$this->enqueue_script( 'escape-velocity-config', 'js/config.js', array( 'jquery-dropotron'), '1.4.2' );
		$this->enqueue_script( 'skeljs', 'js/skel.min.js', array(), '0.3.9' );
		$this->enqueue_script( 'skeljs-panels', 'js/skel-panels.min.js', array(), '0.3.9' );

		$this->enqueue_script( 'google-maps-api', 'https://maps.google.com/maps/api/js?sensor=true', array(), null );
	}
}
