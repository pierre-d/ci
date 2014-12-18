<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {



	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->library('session');
	}//function



	

	
	public function register(){

			//password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";

	}//function

	
	public function login_user(){




		if($this->input->post('user_login') != '' && $this->input->post('user_password') != '')
		{


			$user_login = $this->input->post('user_login');
			$user_password = md5($this->input->post('user_password'));;
			

			if($this->users_model->login_by_password($user_login,$user_password) != FALSE){


					echo "session biz";

					$ip = $_SERVER['REMOTE_ADDR']; 
					$this->session->set_userdata('ip_address',$ip);
					

					var_dump($this->session->all_userdata());
					die;



								
			
			}else{

				echo "Nein !";
			}


			







		}




		
	}//function

	public function logout_user(){



	}//function



}//class

