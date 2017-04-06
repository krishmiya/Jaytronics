<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	
	public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("Product_model");
        $this->load->library("pagination");
    }
	
	public function get_item(){
		/*$this->load->model('Product_model');
		$tId = $this->uri->segment(3);
		$data['product'] = $this->Product_model->getItem($tId);
		
		$this->load->view('web/base/hdr');
		$this->load->view('web/products_view',$data);
		$this->load->view('web/base/footer');*/
		$tId = $this->uri->segment(3);
		$config = array();
        $config["base_url"] = base_url() . "Products/get_item/".$tId;
        $config["total_rows"] = $this->Product_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->Product_model->fetch_items($config["per_page"], $page,$tId);
        $data["links"] = $this->pagination->create_links();

		$this->load->view('web/base/hdr');
		$this->load->view('web/products_view',$data);
		$this->load->view('web/base/footer');
	}
	
	public function view_product(){
		$this->load->model('Product_model');
		$iId = $this->uri->segment(3);
		$data['product'] = $this->Product_model->viewProduct($iId);
		
		$this->load->view('web/base/hdr');
		$this->load->view('web/product_preview',$data);
		$this->load->view('web/base/footer');
	}
}