<?php

//todo fix he menu left ths is caused in the add wizard css 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cash extends CI_Controller {


	public function index()
	{
		$segment = $this->uri->segment(2);
		echo $segment;
		if ($segment == "")
		{
			$data = "";
			$this->load->view('/cash/index',$data);
		}
		else
		{

			if ($segment == "action")
			{
				$data = "";
				$this->load->view('/cash/action',$data);
			}								
		}
		
		

	}
}
