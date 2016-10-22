<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controladortxt extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('file');	

	}

function index(){
		
		$this->load->view('contenedor');
}
}

