<?php


class Users_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }//function


  	public function get_users(){


  		$query = $this->db->get('ci_users');
  		$result = $query->result();

  	}//function

  	public function get_user_admin(){

  	}//function


  	public function create_user_admin(){


  	}//function

	public function update_user_admin(){

  		
  	}//function

  	public function delete_user_admin(){


  	}//function

  	public function active_user_admin(){


  	}//function


  	public function login_by_password($user_login,$user_password){

        $this->db->select('*');
        $this->db->where('user_login',$user_login);
        $this->db->where('user_pass',$user_password);
        $query = $this->db->get('ci_users');
        $result = $query->result_array();

        if($query->num_rows() == 1){

          return $result;

        }else{

          return FALSE;

        }

     

  


  	}//function

  	public function info_connection(){


  	}//function


  	public function create_user_register(){

  		
  	}

 



}