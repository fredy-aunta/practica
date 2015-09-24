<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('tank_auth');
	}

	public function index(){
// 		echo "The logged user is {$this->tank_auth->get_username()}";
		$this->load->view('welcome_message');
	}
}
