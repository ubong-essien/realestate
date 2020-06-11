<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller {

	
	public function index()
	{
		$this->load->model('settings_m');
		$this->load->model('home_m');
		$this->load->model('school_m');
		$this->load->model('accomodation_m');
		$data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $data['featured'] = $this->accomodation_m->get_all_accomodation();

        $this->load->view('inc/header', $data);
        $this->load->view('pages/explore', $data);
        $this->load->view('inc/index_footer', $data);
	}
}