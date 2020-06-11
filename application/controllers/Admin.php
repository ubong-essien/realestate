<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index(){
        if(!isset($_SESSION['logged_agent_user']) ){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
        if(!isset($_SESSION['logged_agent_role']) ){
            $this->session->set_flashdata('privilege','You dont have the privilege to view the page');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents/home');
        $this->load->view('inc/footer', $data);
 
    }
	public function register(){
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents_register');
        $this->load->view('inc/footer', $data);
 
    }
    public function login(){
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents/login');
        $this->load->view('inc/footer', $data);
 
    }
    public function dashboard(){
        if(!isset($_SESSION['logged_agent_user']) ){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
        if(!isset($_SESSION['logged_agent_role']) ){
            $this->session->set_flashdata('privilege','You dont have the privilege to view the page');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $this->load->model('agents_m');
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $data['auth_agent'] = $this->agents_m->get_auth_agent($_SESSION['logged_agent_id']);
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/dashboard', $data);
        $this->load->view('inc/footer', $data);
 
    }
    public function create(){

        if(!isset($_SESSION['logged_agent_user']) ){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
        if(!isset($_SESSION['logged_agent_role']) ){
            $this->session->set_flashdata('privilege','You dont have the privilege to view the page');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/create');
        $this->load->view('inc/footer', $data);
 
    }
    public function showall(){
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
        $this->load->model('accomodation_m');

        $data['acc_data'] = $this->accomodation_m->get_all_accomodation();
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/show_listing', $data);
        $this->load->view('inc/index_footer', $data);
 
    }
    //get agents listing and not all
    public function show_my_all($id){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }

        if(($_SESSION['logged_agent_id'] != $id) ){
            $this->session->set_flashdata('session_error','Your session ended...Login Again...');
            session_destroy();
            redirect('agents_login');
        } 
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $this->load->model('accomodation_m');

        $data['acc_data'] = $this->accomodation_m->get_all_agents_accomodation($id);
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/show_listing', $data);
        $this->load->view('inc/index_footer', $data);
 
    }
    //show all agents for approvals
    public function show_agents(){
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
        $this->load->model('accomodation_m');
        $this->load->model('agents_m');

        //$data['agents_data'] = $this->agents_m->get_agent();
        $data['agents_data'] = $this->agents_m->get_all_agents();
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/agents_list', $data);
        $this->load->view('inc/index_footer', $data);
 
    }
    //end of only agaents listing
    public function doc(){
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $this->load->model('admin_m');
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $data['doc'] = $this->admin_m->load_doc();
        
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/document_list',$data);
        $this->load->view('inc/footer', $data);
 
    }
    public function smsbank(){
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $this->load->model('message_sms_m');
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $data['sms_data'] = $this->message_sms_m->get_sms();
        
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/sms_bank');
        $this->load->view('inc/footer', $data);
 
    }
    public function add_doc(){
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/admin/add_doc');
        $this->load->view('inc/footer', $data);
 
    }
    
    public function add_sms(){
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
    
    public function upload($rec_id){
        //takes a record id
        if(!isset($_SESSION['logged_agent_user']) ){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
        if(!isset($_SESSION['logged_agent_role']) ){
            $this->session->set_flashdata('privilege','You dont have the privilege to view the page');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $url = explode("-",$rec_id);
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        echo $_SESSION['url_token'];
        if($_SESSION['url_token'] != $url[2]){
                echo show_404('application/views/errors/html/error_404.php',TRUE);
               // die();
        }else{
        $data['rec_id'] = $url[1];
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents/create_upload', $data);
        $this->load->view('inc/index_footer', $data);

        }
		
 
    }
    public function create_listing(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('accomodation_m');
    
       // $this->form_validation->set_rules('name', 'Title', 'required');
        
        $this->form_validation->set_rules('addrs', 'Address', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('details', 'Details', 'required');
        $this->form_validation->set_rules('distance', 'Distance form School', 'required');
        $this->form_validation->set_rules('trans', 'Transport fare', 'required');
        $this->form_validation->set_rules('dimension', 'Dimension', 'required');
        $this->form_validation->set_rules('acc_type', 'Accomodation Type', 'required');
        $this->form_validation->set_rules('sch_loc', 'Location', 'required');
        $this->form_validation->set_rules('sch', 'School', 'required');
        
        
        if ($this->form_validation->run() === FALSE)
            {
                redirect('create_listing');
               
            }
            else
            {
                $addrs=$this->input->post('addrs',TRUE);
                $amount=$this->input->post('amount',TRUE);
                $details=$this->input->post('details',TRUE);
                $distance=$this->input->post('distance',TRUE);
                $trans=$this->input->post('trans',TRUE);
                $dimension=$this->input->post('dimension',TRUE);
                $acc_type=$this->input->post('acc_type',TRUE);
                $sch_loc=$this->input->post('sch_loc',TRUE);
                $booking_fee=$this->input->post('booking_fee',TRUE);
                $agent_id=$this->input->post('agent_id',TRUE);

                $accomodation_data=array(
                    'id'=>'',
                    'accomodation_type_id'=>$acc_type,
                    'locality_id'=> $sch_loc,
                    'address'=>$addrs,
                    'amount'=>$amount,
                    'tag_id'=>1,
                    'dimension'=>$dimension,
                    'details'=>$details,
                    'distance_from_school'=>$distance,
                    'average_transportation'=>$trans,
                    'rent_status'=>1,
                    'booked'=>0,
                    'booking_fee'=>$booking_fee,
                    'agent_id'=>$agent_id,
                    'feature'=>0,
                    'visibility'=>0
            );
                $accid=$this->accomodation_m->create_listing($accomodation_data);
                if($accid){
                   // echo $accid;
                    $s =  random_string($type = 'alnum', $len = 12);
                   // echo $s;
                    $_SESSION['url_token'] = $s;
                    $rrr = "20CX"."-".$accid."-".$_SESSION['url_token'];
                  //  echo $rrr;
                       // $this->upload($rrr);
                        redirect("upload_listing/{$rrr}");
                }else{
                    $this->session->set_flashdata('create_error','Data Was Not Saved...Retry...'); 
                    redirect('create_listing');
                }
               
            }
    }
   public function activate_agents(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
        if(!isset($_SESSION['logged_agent_role']) ){
            $this->session->set_flashdata('privilege','You dont have the privilege to view the page');
            redirect('agents_login');
        }

        $agentid=$this->input->post('agentid',TRUE);
        $this->load->model('admin_m');

        $activation_data = array(
            'active' => 1
        );
        $status = $this->admin_m->activate($activation_data,$agentid);
        if($status == true){
            echo "<p class='alert alert-success'>Agents Activated successfully</p>";
        }


   }
   /************************************** */
   public function deactivate_agents(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
        if(!isset($_SESSION['logged_agent_role']) ){
            $this->session->set_flashdata('privilege','You dont have the privilege to view the page');
            redirect('agents_login');
        }

        $agentid=$this->input->post('agentid',TRUE);
        $this->load->model('admin_m');

        $activation_data = array(
            'active' => 0
        );
        $status = $this->admin_m->deactivate($activation_data,$agentid);
        if($status == true){
            echo "<p class='alert alert-success'>Agents deactivated sucessfully</p>";
        }


   }
}