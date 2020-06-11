<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	public function load_school_type()
	{
		$this->load->model('school_m');
		 $this->load->model('settings_m');
		$this->load->model('home_m');
		
        $data['school_type'] = $this->school_m->load_school_type();
		$data['menus'] = $this->home_m->get_menu();
		$data['settings'] = $this->settings_m->get_settings();
		
        $this->load->view('inc/header', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('inc/footer');
		
	}
	public function show_schools()
	{
		//echo "am here";
		//return;
		$sch_type_id=$this->input->post('sch_type',TRUE);
		
		$this->load->model('school_m');
		
		//pass param into the model
        $data = $this->school_m->get_school($sch_type_id);
		//print_r($data[0]);
		echo "<option value='0'>Select Schhol</option>";
		//get and assign results
		foreach($data as $datas){
		//echo $datas;
			$schid = $datas['school_id'];
		$sch_name = $datas['school_name'];
		// create option tags to add to select
       echo "<option value='{$schid}'>{$sch_name}</option>";
			
		}
		
	   return;
	}
}