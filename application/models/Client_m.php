<?php


class Client_m extends CI_model{
    public function __construct()
    {
    $this->load->database();
    }
    public function login($login_details){
      // print_r($login_details);
	   $username=$login_details['Username'];
	   $password=$login_details['password'];
	   
		$cont_query = $this->db->query("SELECT * FROM users WHERE Username='$username' LIMIT 0,1");
		
		
		//print_r($cont_query->row_array());
		return $cont_query->row_array();	

    }
}
?>