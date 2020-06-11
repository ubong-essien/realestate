<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	
	public function index(){
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
        $this->load->view('pages/users/register');
        $this->load->view('inc/index_footer', $data);
 
    }
    public function login(){
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/users/login');
        $this->load->view('inc/footer', $data);
 
    }
	public function Checklogin(){
   
	$user=$this->input->post('user');
    $pass=$this->input->post('pass');
	//echo $user;
	//echo $pass;
	//exit;
	$login_data=array(
                        'username'=>$user,
                        'password'=>$pass
                    );

    //$this->load->model('login_model');  

   $this->load->model('login_m');
  
   $login_array=$this->login_m->userlogin($login_data);
  // echo $login_array['password'];
   // print_r($login_array);
    // hash the user entered pass
   
        if(count($login_array) > 0)
        {
			//echo "password check is true";
			//exit;
            $_SESSION['logged_user']=$login_array['username'];		
            $_SESSION['logged_uset_token']=$login_array['token'];		
          	
			redirect('home');
           
        }
        else
        {
			$this->session->set_flashdata('loginerror','Invalid User Name/Password');
           redirect('user_login');
        }
}


    public function dashboard(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $this->load->model('agents_m');
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $data['auth_agent'] = $this->agents_m->get_auth_agent($_SESSION['logged_agent_id']);
        $this->load->view('inc/header', $data);
        $this->load->view('pages/users/dashboard', $data);
        $this->load->view('inc/index_footer', $data);
 
    }
    public function create(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents/create');
        $this->load->view('inc/index_footer', $data);
 
    }
    public function edit_listing($id){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $this->load->model('school_m');
        $this->load->model('accomodation_type_m');
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $this->load->model('accomodation_m');
        $data['s_acc'] =  $this->accomodation_m->get_single_accomodation($id);
        $data['type'] =   $this->accomodation_type_m->get_acc_type();
        $data['sch'] =   $this->school_m->load_school_type();

        //print_r($data['type']);
       //print_r($data['s_acc']);
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents/edit_listing',$data);
        $this->load->view('inc/index_footer', $data);
 
    }
    public function showall($id){
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
        $this->load->view('pages/agents/show_listing', $data);
        $this->load->view('inc/index_footer', $data);
 
    }
    public function doc(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents/document_list');
        $this->load->view('inc/footer', $data);
 
    }
    public function upload($rec_id){
        //takes a record id
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
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
    public function add_doc(){
        if(!isset($_SESSION['logged_agent_user'])){
            $this->session->set_flashdata('session_error','You Must login to start a session');
            redirect('agents_login');
        }
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/agents/add_doc');
        $this->load->view('inc/footer', $data);
 
    }
	public function checkusername(){
		 $this->load->model('user_m');
		 $username=$this->input->post('username',TRUE);
		 $useravail = $this->user_m->checkusername($username);
		 if($useravail== true){
			 echo "<li class='fa fa-ban' style='color:red'></li> The Username already exist ";
		 }elseif($useravail== false){
			  echo "Username <li class='fa fa-check' style='color:green'></li>";
		 }
	}
    public function process_register(){
        $this->load->model('user_m');
        //die('am here');
        $this->load->helper('form');
        $this->load->library('form_validation');
        //$this->load->library('session');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('fone', 'Phone', 'required');
		$this->form_validation->set_rules('sname', 'Surname', 'required');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('odaname', 'Other Names', 'required');
		$this->form_validation->set_rules('addrs', 'Address', 'required');
		$this->form_validation->set_rules('username', 'Address', 'required');
		$this->form_validation->set_rules('pswd', 'Address', 'required');
	
        if ($this->form_validation->run() === FALSE)
			{
             $this->register();
            }
            else
            {
				$token = uniqidReal(8);
				$sname=$this->input->post('sname',TRUE);
				$fname=$this->input->post('fname',TRUE);
				$odaname=$this->input->post('odaname',TRUE);
                $addrs=$this->input->post('addrs',TRUE);
                $email=$this->input->post('email',TRUE);
                $Phone=$this->input->post('fone',TRUE);
                $username=$this->input->post('username',TRUE);
				$pass=$this->input->post('pswd',TRUE);
                $name = $sname." ".$fname." ".$odaname;
				
				$user_data=array(
								'id'=>'',
								'name'=> $name,
								'email'=>$email,
								'phone'=>$Phone,
								'address'=>$addrs,
								'username'=>$username,
								'password'=>$pass,
								'verified'=>1,
								'token'=>$token
							
									);
                   // insert agents data and get the inserted fot login creation
				    $this->load->model('user_m');
                    $agid =$this->user_m->create_user_data($user_data);
					//echo $agid;
                    
												//var_dump($status1);
												if($agid){
															$datamsg = "<p class='alert alert-success'>Account Data Saved Successfully</p>";
															
														}else{
															$datamsg = "<p class='alert alert-danger'>Error Creating account..Please try again</p>";
                                                        }
                                                      // $b = $datamsg ."|". $msgfile;

                                                    echo  $datamsg;
           // }
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
    public function edit_listing_processor(){
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
    public function upload_handler(){

               
                $record_id=$this->input->post('record_id',TRUE);
               $this->load->model('agents_m');
               

                $image_path = realpath(APPPATH . '../assets/img/properties/');
				$config['upload_path']          = $image_path;
				$config['allowed_types']        = 'jpg|png|jpeg|gif';
				$config['max_size']             = 300;
				$config['overwrite']             = true;
				//$config['max_width']            = 1024;
                //$config['max_height']           = 768; 
               // $config['file_name']="";
               ;
           // $name = array();
                $x = array('img1','img2','img3','img4','img5');
               
                foreach($x as $k=>$y){
                    $token = uniqidReal(4);
                     $config['file_name'] = $token."_". $record_id. ".jpg";
                      $this->load->library('upload', $config);
                     $this->upload->initialize($config);

                    if($this->upload->do_upload($y)){
                        $name[] = $this->upload->data('file_name');
                        echo "<p class='alert alert-success'> File ". $this->upload->data('file_name')." is uploaded sucessfully</p>";
                       // sleep(1);
                    }
                   
                   // echo $this->upload->data('file_name');
                  //  echo $config['file_name'];
                }
                $img = implode('~',$name);
				$r = array(
                    'accomodation_images'=>$img
                );
              $this->agents_m->updt_img($r,$record_id);

                return;
    }
    /*******************************************************************/
    //private  $new_images = array();

    public function edit_upload_handler(){

               // $this->_new_images	= array();
                $record_id=$this->input->post('record_id',TRUE);
                $img_name=$this->input->post('img_name',TRUE);
               $this->load->model('agents_m');
               $this->load->model('accomodation_m');
               

                $image_path = realpath(APPPATH . '../assets/img/properties/');
				$config['upload_path']          = $image_path;
				$config['allowed_types']        = 'jpg|png|jpeg|gif';
				$config['max_size']             = 300;
				$config['overwrite']             = true;
				//$config['max_width']            = 1024;
                //$config['max_height']           = 768; 
               // $config['file_name']="";
            
          //explode the name of th eimage
                   $d = explode("_",$img_name);

                    $token = uniqidReal(4);
                     $config['file_name'] = $token."_". $record_id. ".jpg";
                      $this->load->library('upload', $config);
                      $this->upload->initialize($config);

                    if($this->upload->do_upload($d[0])){
                       // $name[] = $this->upload->data('file_name');
                        echo "<p class='alert alert-success'> File ". $this->upload->data('file_name')." is uploaded sucessfully</p>";
                       // sleep(1);
                    }
               //  var_dump($this->_new_images);
              $imgs =  $this->accomodation_m->get_all_img($record_id);
             // print_r($imgs);
             echo $d[1]."key\n";
              $imgsname =   explode("~",$imgs[0]['accomodation_images']);
              print_r($imgsname);
              $key =  $d[1];
              echo $imgsname[$key]."ggg\n".$key;
              $imgsname['$key'] = $this->upload->data('file_name') ;
              print_r($imgsname);
          /*           foreach( $imgsname as $key => $value){
                        $this->_new_images	= array();
                        if($key == $d[1]){
                            echo "iskey\n";
                            $this->_new_images = $this->upload->data('file_name') ;
                        }else{
                            echo "ntkey\n";
                            $this->_new_images = $value;
                        }
                         
                    } */
               //var_dump($this->_new_images);
                exit;
               $img = implode('~',$new_images);
			    $r = array(
                    'accomodation_images'=>$img
                );
              $this->agents_m->updt_img($r,$record_id);

                return;
    }
    public function logout(){
        session_destroy();
        redirect('agents_login');
    return ;
 }

}