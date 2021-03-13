<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siniflar extends CI_Controller {

	public function index()
	{
		$this->load->view('front/siniflar');
	}
}
