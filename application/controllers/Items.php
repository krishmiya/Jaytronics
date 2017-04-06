<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {
	
	public function add_items_type(){
		$this->load->model('Items_model');
		$description = $this->input->post('typeName');
		
		if($this->Items_model->itemType($description) > 0){
			$this->session->set_userdata('err_msg', "This Item Type Already Exits.");
		}
		else
		{
			$iId = $this->Items_model->addItemsType($description);
			if($iId != 0){
				$this->session->set_userdata('succ_msg', "Item Type Successfully Created.");
			}
			else{
				$this->session->set_userdata('err_msg', "Can not create the Item Type.");
			}
		}
		
		$this->load->view('dash/header');
		$this->load->view('dash/message');
		$this->load->view('dash/footer');
	}
	
	public function edit_items_type(){
		$this->load->model('Items_model');
		$tId = $this->input->post('tId');
		$description = $this->input->post('typeName');
		
		if($this->Items_model->itemType($description) > 0){
			$this->session->set_userdata('err_msg', "This Item Type Already Exits.");
		}
		else
		{
			$this->Items_model->updateItemType($description,$tId);
			$this->session->set_userdata('succ_msg', "Item Type Successfully Updated.");
		}
		
		$this->load->view('dash/header');
		$this->load->view('dash/message');
		$this->load->view('dash/footer');
	}
	
	public function load_item_type() {
        $term = $this->input->get('term');
        $this->load->model('Items_model');
        $info = $this->Items_model->loadItemType($term);
        echo json_encode($info);
    }
	
	private function randomName($length = 8){     
    $chars = '1K0c0R8h8I8a9S1m1H4i0A4d9N8i9T1lHsNhIiMkEaSlHaBkUmDaDlIiK0A1D8A0W8A8T9A1G9O8L9L1A';
	$result = Null;
   
    for ($p = 0; $p < $length; $p++)
    {
        $result .= ($p%2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];
    }
   
    return $result;
	}
	
	public function add_items(){
		$this->load->model('Items_model');
		$this->load->library('upload');
		
		$tId = $this->input->post('category');
		$itemCode = $this->input->post('itemCode');
		$itemName = $this->input->post('itemName');
		$description = $this->input->post('description');
		$qnt = $this->input->post('itemQuantity');
		$costPrice = $this->input->post('costPrice');
		$sellingPrice = $this->input->post('sellingPrice');
		
		if($this->Items_model->itemCode($itemCode) > 0){
			$itemData = $this->Items_model->itemCodeQnt($itemCode);

			$k = 0;
			while ($k < count($itemData)) {
				$itemQnt = $itemData[$k]['itemQnt'];

				$nwQnt = $qnt + $itemQnt;
				$this->Items_model->updateitemCode($nwQnt,$itemCode);
				$this->session->set_userdata('succ_msg', "Item Successfully Created.");
				$k++;
            }
		}
		else
		{
			$files = $_FILES;
			$itmName = 'kss-powerd_' . $this->randomName() . '-jaytronics-' . date('YMd') . $files['userfile']['name'];
			$_FILES['userfile']['name'] = $itmName;
			$_FILES['userfile']['type'] = $files['userfile']['type'];
			$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'];
			$_FILES['userfile']['error'] = $files['userfile']['error'];
			$_FILES['userfile']['size'] = $files['userfile']['size'];
			$files['userfile']['name'] . "<br>";
			$this->upload->initialize($this->set_upload_options());
	
			if($this->upload->do_upload()){
			
				$iId = $this->Items_model->addItem($tId,$itemCode,$itemName,$description,$qnt,$costPrice,$sellingPrice,$_FILES['userfile']['name']);
				if($iId){
					$this->session->set_userdata('succ_msg', "Item Successfully Created.");
				}
				else{
					$this->session->set_userdata('err_msg', "Can not create the Item.");
				}
			}
			else{
				/*$errors = $this->upload->display_errors();
				print_r($errors);*/
			$error = array("err_msg"=>$this->upload->display_errors());
			$this->session->set_userdata('err_msg', " Problem with uploading the image.");
			}
		}
		
		$this->load->view('dash/header');
		$this->load->view('dash/message');
		$this->load->view('dash/footer');
	}
	
	private function set_upload_options() {
        /* upload an image options */
        $config = array();
        $config['upload_path'] = './jay_uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '0';
        $config['overwrite'] = TRUE;
        return $config;
    }
	
	public function edit_items(){
		$this->load->model('Items_model');
		$iId = $this->input->post('iId');
		$tId = $this->input->post('category');
		$itemCode = $this->input->post('itemCode');
		$itemName = $this->input->post('itemName');
		$description = $this->input->post('description');
		$itemQuantity = $this->input->post('itemQuantity');
		$costPrice = $this->input->post('costPrice');
		$sellingPrice = $this->input->post('sellingPrice');
		
		/*if($this->Items_model->itemCodeQnt($itemCode) > 0){
			$this->session->set_userdata('err_msg', "This Item Already Exits.");
		}
		else
		{*/
			$this->Items_model->updateItem($tId,$itemCode,$itemName,$description,$itemQuantity,$costPrice,$sellingPrice,$iId);
			$this->session->set_userdata('succ_msg', "Item Successfully Updated.");
		//}
		
		$this->load->view('dash/header');
		$this->load->view('dash/message');
		$this->load->view('dash/footer');
	}
}