<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	public function contact_seller(){
		$this->load->library('email');
		$this->email->set_mailtype('html');
		
		$cusName = $this->input->post('cusName');
		$cusEmail = $this->input->post('cusEmail');
		$comName = $this->input->post('comName');
		$subject = $this->input->post('subject');
		$msg = $this->input->post('msg');
		
		$this->email->from($cusEmail, $comName);
		$this->email->to('don@jaytronics.co.nz');
		$this->email->subject($subject);
		$this->email->message($msg);
				
		if($this->email->send()){
			$this->session->set_userdata('succ_msg', "Email Successfully Send.");
		}
		
		$this->load->view('web/base/hdr');
		$this->load->view('web/pages/contact');
		$this->load->view('web/base/footer');
	}
}