<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {



	function __construct()
	{
		parent::__construct();
	}//function


	public function home()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('footer');

	}//function 

	

	







}//class

