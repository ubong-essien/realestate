<?php


class Accomodation_type_m extends CI_model{
   
    public function get_acc_type(){
		$cont_query = $this->db->query("SELECT * FROM accomodation_type_tb");
		
		return $cont_query->result_array();	

    }
}
?>