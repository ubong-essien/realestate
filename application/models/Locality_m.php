<?php


class Locality_m extends CI_model{
    
 public function get_locality($sch_id)
    {
	$cont_array=array('school_id' => $sch_id);
	$cont_query = $this->db->get_where('school_locality_tb',$cont_array,"","");
    return $cont_query->result_array();			
            
    }
}
?>