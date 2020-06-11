<?php


class Admin_m extends CI_model{
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
    public function activate($data,$id){
      if(is_array($data)){
        $this->db->where('agents_id', $id);
      return  $this->db->update('login_tb', $data);
                       
          }
     }
     public function deactivate($data,$id){
      if(is_array($data)){
        $this->db->where('agents_id', $id);
      return  $this->db->update('login_tb', $data);
                       
          }
     }
     public function load_doc(){
    //  $this->db->where('visibility', 1);
      $cont_query = $this->db->get('doc_archive');
      return $cont_query->result_array();			             
          }
     
     public function create_doc($data){
      if(is_array($data)){
        $this->db->insert('agents_tb', $data);
        $id = $this->db->insert_id();	
        return $id;
}
     }
}

?>