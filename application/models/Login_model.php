<?php

class Login_model extends CI_Model {
	
	public function checkVerifyPassword($email){
		$this->db->where('email',$email);
		$query = $this->db->get('users');
		return $query->num_rows();
	}
	
	public function logIn($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		return $query->result_array();
	}
}