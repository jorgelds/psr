<?php

class Modelo extends CI_Model {

  function __construct() {
    parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
  }

}
?>
