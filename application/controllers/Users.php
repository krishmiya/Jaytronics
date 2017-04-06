<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function login(){
		$this->load->view('users/log-in');
	}
	
	public function log_in(){
		$this->load->model('Login_model');
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		if($this->Login_model->checkVerifyPassword($email) > 0){
			$data = $this->Login_model->logIn($email,md5($password));
			if(count($data) > 0){
				$k = 0;
				while ($k < count($data)) {
					$this->session->set_userdata('uId', $data[$k]['uId']);
					$k++;
				}
				if($this->session->userdata('uId')){
					$this->load->view('dash/header');
					$this->load->view('dash/footer');
				}
				else{
					$this->login();
				}
			}
			else{
				$this->session->set_userdata('err_msg', "Incorrect Credentials");
			}
		}
		else{
			$this->session->set_userdata('err_msg', "Incorrect Credentials");
		}
	}
	
	public function log_out(){
		$this->load->view('users/logout');
	}
}