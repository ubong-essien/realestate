<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->model('settings_m');
		$this->load->model('home_m');
		
		
		
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        //$data['services'] = $this->home_m->get_services();
		
		 $this->load->view('inc/header', $data);
        $this->load->view('pages/contact', $data);
        $this->load->view('inc/footer');
	}
	
}