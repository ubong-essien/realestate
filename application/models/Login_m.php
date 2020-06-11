<?php

class Login_m extends CI_model{
    public function __construct()
    {
    $this->load->database();
    }
    public function agentlogin($login_details){
      // print_r($login_details);
	   $username=$login_details['username'];
	   $password=$login_details['password'];
	   
		$cont_query = $this->db->query("SELECT * FROM login_tb WHERE username='$username ' AND active = 1 LIMIT 0,1");
		
		
		//print_r($cont_query->row_array());
		return $cont_query->row_array();	

    }
    public function adminlogin($login_details){
      // print_r($login_details);
	   $username=$login_details['username'];
	   $password=$login_details['password'];
	   
		$cont_query = $this->db->query("SELECT * FROM users WHERE Username='$username' LIMIT 0,1");
		
		
		//print_r($cont_query->row_array());
		return $cont_query->row_array();	

    }
	 public function userlogin($login_details){
      // print_r($login_details);
	   $username=$login_details['username'];
	   $password=$login_details['password'];
	   
		$cont_query = $this->db->query("SELECT * FROM client_tb WHERE username='$username' AND password='$password' LIMIT 0,1");
		
		
		//print_r($cont_query->row_array());
		return $cont_query->row_array();	

    }
}
?>