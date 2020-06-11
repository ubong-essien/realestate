<?php


class School_m extends CI_model{


    public function load_school_type()
    {
	
	$cont_query = $this->db->get('school_type_tb');
    return $cont_query->result_array();			
            
    }
    public function get_school($sch_type_id)
    {
	//$cont_array=array('school_type_id' => $sch_type_id,'active' => 1);
	$this->db->where('school_type_id', $sch_type_id);
	$this->db->where('active', 1);
	//$cont_query = $this->db->get_where('school_tb',$cont_array,"","");
	$cont_query = $this->db->get('school_tb');
	//var_dump($cont_query);
	//print_r($cont_query->result_array());
    return $cont_query->result_array();			
            
    }
	
	
	
	
}

?>