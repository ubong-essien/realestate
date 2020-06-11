<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_sms extends CI_Controller {

	public function save_sms(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
		}
		if(!isset($_SESSION['logged_agent_role']) ){
            $this->session->set_flashdata('privilege','You dont have the privilege to view the page');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $this->load->model('message_sms_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();

		$sms_title=$this->input->post('sms_title',TRUE);
		$sms_txt=$this->input->post('sms_txt',TRUE);
				
		$smsdata= array(
			'sms_descr' => $sms_title,
			'sms_txt' => $sms_txt
		);
		$status = $this->message_sms_m->create_sms($smsdata);
		if($status == true){
            echo "<p class='alert alert-success'>Message Saved successfully</p>";
        }
	}
	
    public function send_sms(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/add_sms');
        $this->load->view('inc/index_footer', $data);
 
    }
}