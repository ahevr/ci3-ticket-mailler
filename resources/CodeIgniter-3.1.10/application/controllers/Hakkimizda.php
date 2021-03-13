<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {

	public function index()
	{
		$this->load->view('front/hakkimizda');
	}
}
