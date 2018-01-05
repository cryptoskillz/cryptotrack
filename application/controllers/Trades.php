<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trades extends CI_Controller {

	public function index()
	{

		//get the type
		$data['assettype'] = $this->uri->segment(2, 0);

		//get the price object from coindesk
		$html = file_get_contents("https://api.coindesk.com/v1/bpi/currentprice/".$data['assettype'].".json");
		$price = json_decode($html);
		//get the current price
		$currentprice = $price->bpi->USD->rate_float;
		//remove the trailing decimal places, I mean why return it more than 2!
		$currentprice = number_format($currentprice,2);
		//store it
		$data['currentprice'] = $currentprice;
		$data['currentpricechart'] = "https://coinmarketcap.com/currencies/bitcoin/";
		//todo (chris) add the login in checker here
		$this->load->view('trades',$data);
	}
}
