<?php

//todo fix he menu left ths is caused in the add wizard css 
defined('BASEPATH') OR exit('No direct script access allowed');

class Fiat extends CI_Controller {

	public function index()
	{
		$data = "";
		$this->load->view('fiat',$data);
	}
}