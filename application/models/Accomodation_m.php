<?php


class Accomodation_m extends CI_model{
 
    public function get_accomodations($acctype_id,$loc_id,$max){
    /* public function get_accomodation(){
		 $acctype_id = 2;
		$loc_id = 17;
		$max = 15000; */
		//$cont_array=array('school_type_id' => $sch_type_id,'active' => 1);
   // $cont_query = $this->db->query("SELECT * FROM accomodation_tb WHERE locality_id='$loc_id' AND accomodation_type_id ='$acctype_id' AND amount <= '$max' AND visibility = 1");
		$this->db->where('locality_id', $loc_id);
		$this->db->where('visibility', 1);
		$this->db->where('accomodation_type_id', $acctype_id);
		$this->db->where('amount <=', $max);
		//$cont_query = $this->db->get_where('school_tb',$cont_array,"","");
		$cont_query = $this->db->get('accomodation_tb');
		//print_r();			
         return $cont_query->result_array();       
    }
	public function get_accomodation($acctype_id,$loc_id,$max)
	{
    $this->db->select('a.amount,a.address,
	a.accomodation_images,a.amount,
	a.dimension,a.distance_from_school,
	a.average_transportation,a.booked,
	b.locality_name,t.tag_name,g.agents_name,
	g.email,g.phone,g.whatsapp,g.passport,f.accomodation_type_name');
	
    $this->db->from('accomodation_tb a,tag_tb t,school_locality_tb b,agents_tb g,accomodation_type_tb f'); 
    $this->db->join('school_locality_tb b', 'b.locality_id = a.locality_id');
    $this->db->join('tag_tb t', 't.tag_id=a.tag_id');
    $this->db->join('agents_tb g', 'g.agent_id = a.agent_id');
    $this->db->join('accomodation_type_tb f', 'f.accomodation_type_id = a.accomodation_type_id');
	
    $this->db->where('locality_id', $loc_id);
	$this->db->where('visibility', 1);
	$this->db->where('accomodation_type_id', $acctype_id);
	$this->db->where('amount <=', $max);
	
    $this->db->order_by('a.date_added','desc');         
    $query = $this->db->get(); 
	
	print_r($query->result_array());
   /*  if($query->num_rows() != 0)
    {
        return $query->result_array();
    }
	
	SELECT `a`.`amount`, `a`.`address`, `a`.`accomodation_images`, `a`.`amount`, `a`.`dimension`, `a`.`distance_from_school`, `a`.`average_transportation`, `a`.`booked`, `b`.`locality_name`, `t`.`tag_name`, `g`.`agents_name`, `g`.`email`, `g`.`phone`, `g`.`whatsapp`, `g`.`passport`, `f`.`accomodation_type_name` FROM (`accomodation_tb` `a`, `tag_tb` `t`, `school_locality_tb` `b`, `agents_tb` `g`, `accomodation_type_tb` `f`) JOIN `school_locality_tb` `b` ON `b`.`locality_id`=`a`.`locality_id` JOIN `tag_tb` `t` ON `t`.`tag_id`=`a`.`tag_id` JOIN `agents_tb` `g` ON `g`.`agent_id` = `a`.`agent_id` JOIN `accomodation_type_tb` `f` ON `f`.`accomodation_type_id` = `a`.`accomodation_type_id` WHERE `locality_id` = '15' AND `visibility` = 1 AND `accomodation_type_id` = '2' AND `amount` <= '150000' ORDER BY `a`.`date_added` DESC
    else
    {
        return false;
    } */
	}
	public function get_accomodationss($acctype_id,$loc_id,$max)
	{
    
    $cont_query = $this->db->query("SELECT a.id, a.amount,a.booking_fee, a.address, a.accomodation_images,
	a.dimension, a.details, a.distance_from_school,
	a.average_transportation, a.booked,a.tag_id, s.locality_name,
	g.agents_name,g.email,g.phone,g.whatsapp,g.passport,f.accomodation_type_name 
	FROM agents_tb g,accomodation_tb a,school_locality_tb s,accomodation_type_tb f 
	WHERE a.locality_id = $loc_id AND a.accomodation_type_id = '$acctype_id' 
	AND g.agent_id = a.agent_id AND a.amount <= '$max' AND a.locality_id = s.locality_id AND a.accomodation_type_id = f.accomodation_type_id");
		
		//print_r($cont_query->result_array());
	return $cont_query->result_array();
	
	}
	public function get_featured_accomodation()
	{
    
    $cont_query = $this->db->query("SELECT a.id, a.amount,a.booking_fee, a.address, a.accomodation_images,
	a.dimension, a.details, a.distance_from_school,
	a.average_transportation, a.booked,a.tag_id, s.locality_name,
	g.agents_name,g.email,g.phone,g.whatsapp,g.passport,f.accomodation_type_name 
	FROM agents_tb g,accomodation_tb a,school_locality_tb s,accomodation_type_tb f 
	WHERE a.feature = 1 AND a.locality_id = s.locality_id AND a.accomodation_type_id = f.accomodation_type_id AND g.agent_id = a.agent_id");
		
		//print_r($cont_query->result_array());
	return $cont_query->result_array();
	
	}
	public function get_all_accomodation()
	{
    
    $cont_query = $this->db->query("SELECT a.id,a.amount,a.booking_fee, a.address, a.accomodation_images,
	a.dimension, a.details, a.distance_from_school,
	a.average_transportation, a.booked,a.tag_id, s.locality_name,
	g.agents_name,g.email,g.phone,g.whatsapp,g.passport,f.accomodation_type_name 
	FROM agents_tb g,accomodation_tb a,school_locality_tb s,accomodation_type_tb f 
	WHERE a.locality_id = s.locality_id AND a.accomodation_type_id = f.accomodation_type_id AND g.agent_id = a.agent_id");
		
		//print_r($cont_query->result_array());
	return $cont_query->result_array();
	
	}
	public function get_single_accomodation($id)
	{
    
    $cont_query = $this->db->query("SELECT a.id,a.accomodation_type_id,a.locality_id, a.amount,a.booking_fee, a.address, a.accomodation_images,
	a.dimension, a.details, a.distance_from_school,
	a.average_transportation, a.booked,a.tag_id, s.locality_name,
	g.agents_name,g.email,g.phone,g.whatsapp,g.passport,f.accomodation_type_name 
	FROM agents_tb g,accomodation_tb a,school_locality_tb s,accomodation_type_tb f 
	WHERE a.id = '$id' AND a.locality_id = s.locality_id AND a.accomodation_type_id = f.accomodation_type_id AND g.agent_id = a.agent_id");
		
		//print_r($cont_query->result_array());
	return $cont_query->result_array();
	
	}
	public function get_single_checkout_accomodation($id)
	{
    
    $cont_query = $this->db->query("SELECT a.id, a.amount,a.booking_fee, a.address, a.accomodation_images,
	a.dimension, a.details, f.accomodation_type_name 
	FROM agents_tb g,accomodation_tb a,school_locality_tb s,accomodation_type_tb f 
	WHERE a.id = '$id' AND a.locality_id = s.locality_id AND a.accomodation_type_id = f.accomodation_type_id AND g.agent_id = a.agent_id");
		
		//print_r($cont_query->result_array());
	return $cont_query->row_array();
	
	}
	public function get_all_agents_accomodation($agid)
	{
    
    $cont_query = $this->db->query("SELECT a.id, a.amount,a.booking_fee, a.address, a.accomodation_images,
	a.dimension, a.details, a.distance_from_school,a.agent_id,
	a.average_transportation, a.booked,a.tag_id, s.locality_name,
	g.agents_name,g.email,g.phone,g.whatsapp,g.passport,f.accomodation_type_name 
	FROM agents_tb g,accomodation_tb a,school_locality_tb s,accomodation_type_tb f 
	WHERE a.agent_id = '$agid' AND a.locality_id = s.locality_id AND a.accomodation_type_id = f.accomodation_type_id AND g.agent_id = a.agent_id ");
		
		//print_r($cont_query->result_array());
	return $cont_query->result_array();
	
	}
	public function create_listing($data){
	
			if(is_array($data)){
						$this->db->insert('accomodation_tb', $data);
						$id = $this->db->insert_id();	
						return $id;
					}
			
	}
	public function get_all_img($id)
	{
    $cont_query = $this->db->query("SELECT accomodation_images FROM accomodation_tb WHERE id='$id' ");
	print_r($cont_query->result_array());
	return $cont_query->result_array();
	
	}
}
?>