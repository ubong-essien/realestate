<?php


class User_m extends CI_model{
     public function get_agent()
    {
	
      $this->db->where('visibility', 1);
      $cont_query = $this->db->get('agents_tb');
      return $cont_query->result_array();			
            
    }
    public function get_all_agents()
    {
      
      $cont_query = $this->db->query("SELECT x.agent_id, x.agents_name,x.email, x.phone, x.whatsapp,
    x.passport, l.active, l.agents_id
    FROM agents_tb x,login_tb l
    WHERE x.agent_id = l.agents_id AND x.visibility = 1 ");
    return $cont_query->result_array();
    
    }
    public function get_auth_agent($x)
    {
	              $this->db->where('visibility', 1);
	              $this->db->where('agent_id', $x);
              	$cont_query = $this->db->get('agents_tb');
	            //  print_r($cont_query->result_array());
                return $cont_query->result_array();			
            
    }
    public function create_user_data($data){
		if(is_array($data)){
                    return $this->db->insert('client_tb', $data);
                    
				}
        }
     public function create_users_login($data){
            if(is_array($data)){
                        return $this->db->insert('login_tb', $data);	
                    }
        }
       public function updt_img($data,$id){
          if(is_array($data)){
            $this->db->where('id', $id);
          return  $this->db->update('accomodation_tb', $data);
                           
              }
         }
	public function check_username($username){
				$this->db->where('username', $username);
				$cont_query = $this->db->get('client_tb');
				$avail = $cont_query->num_rows();
				if($avail >0){
					return TRUE;
				}else{
					return FALSE;
					}
		}
    }

?>