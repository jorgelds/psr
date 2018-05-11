<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controler extends CI_Controller {
	public function __construct() {
	    parent::__construct();
        $this->load->library('session');
  	}

	public function index() {
		$datos = array(
			'mensaje' => 100,
			'error' => ""
		);
		$this->load->view('head',$datos);
		$this->load->view('formulario');
		$this->load->view('footer');
	}
}

?>
