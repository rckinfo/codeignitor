<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
	public function index($name=null)
	{
		$this->load->view('homepage',['name'=>$name]);
	}
	

}
