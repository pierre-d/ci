<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {



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

	

	
	public function register(){

			//password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";

	}//function






}//class

