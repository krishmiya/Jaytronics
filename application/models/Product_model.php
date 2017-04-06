<?php

class Product_model extends CI_Model {	

	public function __construct() {
        parent::__construct();
    }
	
	public function getItem($tId){
		$this->db->where('tId',$tId);
		$query = $this->db->get('items');
		return $query->result_array();
	}
	
	public function viewProduct($iId){
		$this->db->where('iId',$iId);
		$query = $this->db->get('items');
		return $query->result_array();
	}
	
	public function record_count() {
		$this->db->join('itemtype', 'itemtype.tId = items.tId');
        $query = $this->db->get('items');
		return $query->num_rows();
    }
	
	public function fetch_items($limit, $start,$tId) {
		$this->db->join('itemtype', 'itemtype.tId = items.tId');
		$this->db->where('items.tId',$tId);
        $this->db->limit($limit, $start);
        $query = $this->db->get("items");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}