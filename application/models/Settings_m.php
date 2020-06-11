<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_m extends CI_Model {
    
    public function get_settings()
    {
    
    $cont_query = $this->db->get('settings_tb');
    
	
    return $cont_query->result_array();			
            
    }
}
?>