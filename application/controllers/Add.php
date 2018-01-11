<?php

//todo fix he menu left ths is caused in the add wizard css 
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function index()
	{
		$data['assettype'] = $this->uri->segment(2, "");
		//echo $data['assettype'];
		//todo (chris) add the login in checker here
		$this->load->view('add',$data);
	}
}
