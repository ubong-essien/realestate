<?php
	//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {


	public function to_cart(){
		$item_id=$this->input->post('item_id',TRUE); 
		$items_string="";
		$no="";
		//echo "am here!!!";
		//return;
	
		//echo $item_id;
		//exit;
		if(empty($_SESSION['items'])){

			$cart_items[] = $item_id;
			//print_r($cart_items);
			$_SESSION['items'] = $cart_items;
			$no = count($_SESSION['items']);
			//$items_string = implode("~", $_SESSION['items']);
		//	echo $items_string;
			
		}else{
			array_push($_SESSION['items'],$item_id);
			$no = count($_SESSION['items']);
		}
		
		//	$items_string = implode("~", $_SESSION['items']);
			echo $no;
		return $_SESSION['items'];
	}
	public function showcheckout($selecteditems){

		
		$data['selected'] = $selecteditems;
		//return;
			 $this->load->view('inc/header', $data);
			$this->load->view('pages/checkout', $data);
			$this->load->view('inc/index_footer', $data);


	}

	public function checkout($param=""){
	//	echo $param;
		//exit;
		$this->load->model('settings_m');
		$this->load->model('home_m');
		$this->load->model('school_m');
		$this->load->model('accomodation_m');
		$data['settings'] = $this->settings_m->get_settings();
		$data['menus'] = $this->home_m->get_menu();
			//$selecteditems = array();
			
		//	$checkout = $this->input->post('checkout',TRUE);
		//	if(isset($checkout)){
		//		echo "ddddd";
		//	$selected_items = $this->input->post('selected_items',TRUE);
				//echo $selected_items ;
				//$selecteditems = explode("~", $selected_items);
		//	}else{
			//	echo "vvvvv";
				$selected_items = $param;
				//$selected_items = $_SESSION['items'];
				//print_r($_SESSION['sel_items']);
		//	}
			$selecteditems = explode("~", $selected_items);
		//	print_r($selected_items);
		//	//$sel=array();
			
			foreach($selecteditems as $items){
		
			//echo $items;
				
				$sel[]= $this->accomodation_m->get_single_checkout_accomodation($items);
				$data['selected'] = $sel;
				
			}
			$data['selecteditems']= $selecteditems;
			//echo $param;
			//print_r($data['selected']);
			$this->load->view('inc/header', $data);
			$this->load->view('pages/checkout', $data);
			$this->load->view('inc/index_footer', $data);

			return $data['selected'];
			
	}
	
	public function del_item(){
	//	echo "am here";
		//exit;
		$k = $this->input->post('key',TRUE);
		//echo $k;
	//	$selected_items = $_SESSION['items'];
		//print_r($_SESSION['items']);
		$key = array_search($k, $_SESSION['items']); // $key = 2;
		//echo $key;
		//	exit;
		//$selecteditems = explode("~", $selected_items);
		unset($_SESSION['items'][$key]);
		//unset( $_SESSION['items'][$k]);
		//print_r($_SESSION['items']);

	
		//return;
		//$this->load->model('accomodation_m');
		if(count($_SESSION['items']) > 1){

		$selected = implode("~", $_SESSION['items']);
		}else{
			$selected = implode("~", $_SESSION['items']);
	//$selected = &$_SESSION['items'];
		}
		echo $selected;
	
		
	}
}