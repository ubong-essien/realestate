<?php


class Message_sms_m extends CI_model{
  public function get_sms()
  {
    $cont_query = $this->db->get('sms_tb');
    return $cont_query->result_array();			
          
  }

  public function create_sms($data){
	
    if(is_array($data)){
          $this->db->insert('sms_tb', $data);
          $id = $this->db->insert_id();	
          return $id;
        }
    
}
}
?>