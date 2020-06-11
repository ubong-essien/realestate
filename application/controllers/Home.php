<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	 public function index(){

        $this->load->model('settings_m');
		$this->load->model('home_m');
		$this->load->model('school_m');
		$this->load->model('accomodation_m');
		
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();
        $data['services'] = $this->home_m->get_services();
        $data['featured'] = $this->accomodation_m->get_featured_accomodation();
       $data['school_type'] = $this->school_m->load_school_type();
       $data['news'] = $this->home_m->get_news();
	   
        $this->load->view('inc/header', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('inc/index_footer', $data);
 
    }
	  public function login(){
			$this->load->model('settings_m');
			$this->load->model('home_m');
			
		
        $data['settings'] = $this->settings_m->get_settings();
        $data['menus'] = $this->home_m->get_menu();	
			$this->load->view('inc/header', $data);
            $this->load->view('pages/users/login', $data);
            $this->load->view('inc/footer', $data);
			 
        }
		
	 public function contact(){

        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();

        $this->load->view('inc/header', $data);
        $this->load->view('contact');
        $this->load->view('inc/footer', $data);
 
	}
	public function register(){
		$this->load->model('home_m');
        $this->load->model('settings_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
        $this->load->view('inc/header', $data);
        $this->load->view('pages/register');
        $this->load->view('inc/footer', $data);
 
    }
	 public function about(){

        $this->load->model('settings_m');
		$this->load->model('home_m');
		$this->load->model('school_m');
		$this->load->model('agents_m');
		$this->load->model('accomodation_m');
        $data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
		$data['agents'] = $this->agents_m->get_agent();
		
        $this->load->view('inc/header', $data);
        $this->load->view('pages/about_us' ,$data);
        $this->load->view('inc/footer', $data);
 
    }
	public function show_accomodation()
	{	$this->load->model('accomodation_m');
			
				$datas = $this->accomodation_m->get_featured_accomodation();
				//$data = $this->accomodation_m->get_accomodations();
				foreach($datas as $listing ):
				?>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg"  style="background-image:url('<?= base_url();?>assets/img/feature/2.jpg');">
							<div class="rent-notic">FOR RENT</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5><?= $listing['accomodation_type_name'];?></h5>
								<p><i class="fa fa-map-marker"></i> <?= $listing['address'];?></p>
							</div>
							<div class="room-info-warp">
							<?php
							$d = explode("~",$listing['details']);
							$s = implode(", ",$d);
							?>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i><?= $listing['dimension'];?></p>
										<p><i class="fa fa-list"></i><?= $s;?></p>
									</div>
									
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> <?= $listing['agents_name'];?></p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-phone"></i> <?= $listing['phone'];?></p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">NGN <?= $listing['amount'];?>.00</a>
						</div>
					</div>
				</div>
				<?php
				endforeach;
			//print_r($data);
				
				return;
				
	}
}