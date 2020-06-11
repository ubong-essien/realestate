<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$this->load->model('settings_m');
		$this->load->model('home_m');
		$this->load->model('agents_m');
		
		
		
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $data['services'] = $this->home_m->get_services();
        $data['agents'] = $this->agents_m->get_agent();
		
		 $this->load->view('inc/header', $data);
        $this->load->view('pages/services', $data);
        $this->load->view('inc/footer');
	}
	
}