<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jaytronics extends CI_Controller {
	
	public function index() {
        if (!$this->session->userdata('uId')) {
            redirect('Users/login');
        }
    }
	
	public function item_type()	{
		$this->index();
		$this->load->view('dash/header');
		$this->load->view('items/itemType');
		$this->load->view('dash/footer');
	}
	
	public function view_item_type(){
		$this->index();
		$this->load->model('Items_model');
		$data['itemType'] = $this->Items_model->viewItemType();
		$this->load->view('dash/header');
		$this->load->view('items/viewItemType',$data);
		$this->load->view('dash/footer');
	}
	
	public function get_by_id(){
		$this->index();
		$tId = $this->uri->segment(3);
		$this->load->model('Items_model');
		
		$data['itemType'] = $this->Items_model->getById($tId);
		
		$this->load->view('dash/header');
		$this->load->view('items/editItemType',$data);
		$this->load->view('dash/footer');
	}
	
	public function items()	{
		$this->index();
		$this->load->model('Items_model');
		$data['itemType'] = $this->Items_model->viewItemType();
		$this->load->view('dash/header');
		$this->load->view('items/itemData',$data);
		$this->load->view('dash/footer');
	}
	
	public function all_items()	{
		$this->index();
		$this->load->model('Items_model');
		$data['items'] = $this->Items_model->viewAllItems();
		$this->load->view('dash/header');
		$this->load->view('items/viewItems',$data);
		$this->load->view('dash/footer');
	}
	
	public function get_item_by_id(){
		$this->index();
		$iId = $this->uri->segment(3);
		$this->load->model('Items_model');
		
		$data['item'] = $this->Items_model->getItemById($iId);
		$data['itemType'] = $this->Items_model->viewItemType();
		
		$this->load->view('dash/header');
		$this->load->view('items/editItem',$data);
		$this->load->view('dash/footer');
	}
	
	public function items_sale(){
		$this->load->model('Items_model');
		$data['items'] = $this->Items_model->viewAllItems();
		$this->load->view('dash/header');
		$this->load->view('sales/sale',$data);
		$this->load->view('dash/footer');
	}
}
