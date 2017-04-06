<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
	public function add_sles(){
		$this->load->model('Sales_model');
		$this->load->model('Items_model');
		$customerName = $this->input->post('customerName');
		$iId = $this->input->post('itemName');
		$itemQuantity = $this->input->post('itemQuantity');
		
		$sId = $this->Sales_model->addSale($customerName);
		$data = $this->Items_model->getItemById($iId);
		
		$itemQnt = $data[0]['itemQnt'];
		$newQnt = $itemQnt - $itemQuantity;
		
		$this->Sales_model->updateItemQnt($iId,$newQnt);
		$sumId = $this->Sales_model->addSummary($sId,$iId,$itemQuantity);
		
		if($sumId != 0){
				$this->session->set_userdata('succ_msg', "Sale Successfully Created.");
			}
			else{
				$this->session->set_userdata('err_msg', "Can not create the Sale.");
			}
			
			$this->load->view('dash/header');
		$this->load->view('dash/message');
		$this->load->view('dash/footer');
	}
}