<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accomodation extends CI_Controller {

	
	public function show_accomodation()
	{	$this->load->model('accomodation_m');
				 $acctype_id=$this->input->post('acc_type',TRUE);
				$loc_id=$this->input->post('locate',TRUE);
				//$min=$this->input->post('min',TRUE);
				$max=$this->input->post('max',TRUE); 
			
		//echo $acctype_id."-".$loc_id."-".$min."-".$max;
		//echo $acctype_id."-".$loc_id."-".$max;
		
				$datas = $this->accomodation_m->get_accomodationss($acctype_id,$loc_id,$max);
				//$data = $this->accomodation_m->get_accomodations();
				$tokens=array();
				foreach($datas as $listing ):
				$token = uniqidReal(8);
				
				$tokens[] = $token;
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
							<?php
							//$param = $listing['id']."_".$_SESSION['token_num'];
							$param = $listing['id']."_".$token;
							?>
							<a href="<?= site_url('accomodation/single_listing/'.$param);?>" class="room-price">NGN <?= $listing['amount'];?>.00</a>
						</div>
					</div>
				</div>
				<?php
				endforeach;
			$_SESSION['token_num'] = $tokens;
				
				return;
				
	}
	public function single_listing(){
		$this->load->model('settings_m');
		$this->load->model('home_m');
		$this->load->model('school_m');
		$this->load->model('accomodation_m');
		$data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
		//echo $param;
	//	if(!isset($param)){
		//	$param = $this->uri->segment(3,0);
		//	echo $param;
		//}
	//	$param = $this->input->post_get('item_id',TRUE); 
		$param = $this->uri->segment(3);
		
		
		//echo $param;
		//$x = explode("_",$param);
	//	$acc_id = $x[0];
	//	$acc_token = $x[1];
		
		//echo $acc_id ."--".$acc_token;
		
		//if(in_array($acc_token,$_SESSION['token_num'],true)){
			//echo $acc_token;
				//var_dump($_SESSION['token_num']);
			//exit;
			
			$data['accoms']= $this->accomodation_m->get_single_accomodation($param);
			//print_r($data['accoms']);
			 $this->load->view('inc/header', $data);
			$this->load->view('pages/single_list', $data);
			$this->load->view('inc/index_footer');
			
		}
		//else{
			
		//	 $this->load->view('inc/header', $data);
		//	$this->load->view('pages/error_pages/single_view_error');
		//	$this->load->view('inc/footer');
			
		//}
		

	
}