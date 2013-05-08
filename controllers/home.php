<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->view('header',array('ctrl'=>$this->ctrl,'activeMenuItem'=>$this->activeMenuItem));
		$this->load->view('home');
		$this->load->view('footer');
	}

}
