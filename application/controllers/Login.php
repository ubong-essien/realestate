<?php
error_reporting(0);
//defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller
{
      public function index(){
			if(!isset($_SESSION['logged_admin_user'])){
				
				 $this->load->view('includes/login_header');
            $this->load->view('admin/login_form');
            $this->load->view('includes/footer');
			}else{
				redirect('admin/index');
			}
            
        }


public function Checkagentslogin(){
   
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
   $this->load->model('agents_m');
   $login_array=$this->login_m->agentlogin($login_data);
  // echo $login_array['password'];
   // print_r($login_array);
    // hash the user entered pass
    $login_chk=password_verify($pass,$login_array['password']);

        if($login_chk===TRUE)
        {
			//echo "password check is true";
			//exit;
            $_SESSION['logged_agent_user']=$login_array['username'];		
            $_SESSION['logged_agent_id']=$login_array['id'];		
            $_SESSION['logged_agent_role']=$login_array['user_role'];		
            $data['auth_agent'] = $this->agents_m->get_auth_agent($_SESSION['logged_agent_id']);

            switch($_SESSION['logged_agent_role']){
                    case 1:
                        $this->load->view('inc/header');
                        $this->load->view('pages/agents/dashboard',$data);
                        $this->load->view('inc/footer');
                        break;
                    case 2:
                        $this->load->view('inc/header');
                        $this->load->view('pages/admin/dashboard',$data);
                        $this->load->view('inc/footer');
                        break;
					case 3:
                        redirect('home');
                        break;
                    default:
                         $this->session->set_flashdata('loginerror','Invalid User Name/Password');
                         break;
            }
           
           // redirect('agents/dashboard');
        }
        else
        {
			$this->session->set_flashdata('loginerror','Invalid User Name/Password');
           redirect('agents_login');
        }
}

	 public function logout(){
		  session_destroy();
		  redirect('login/index');
	  return ;
   }







}