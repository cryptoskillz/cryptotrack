<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		//todo (chris) add the login in checker here		
		$this->load->view('login');
	}
}