<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locality extends CI_Controller {

	public function show_locality()
	{
		//schid = school id
		// load the model
		$schid=$this->input->post('sch',TRUE);
		$this->load->model('locality_m');
		
		//pass param into the model
        $data = $this->locality_m->get_locality($schid);
		//get and assign results
		echo "<option value='0'>Select Location</option>";
		foreach($data as $datas){
		$locid = $datas['locality_id'];
		$loc_name = $datas['locality_name'];
		// create option tags to add to select
       echo "<option value='{$locid}'>{$loc_name}</option>";
		}
	   return;
	}
}