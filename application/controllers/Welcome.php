<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('web/base/header');
		$this->load->view('web/pages/index');
		$this->load->view('web/base/footer');
	}
	
	public function about()
	{
		$this->load->view('web/base/header');
		$this->load->view('web/pages/about');
		$this->load->view('web/base/footer');
	}
	
	public function contact()
	{
		$this->load->view('web/base/hdr');
		$this->load->view('web/pages/contact');
		$this->load->view('web/base/footer');
	}
}
