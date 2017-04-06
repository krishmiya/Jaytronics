<?php

class Items_model extends CI_Model {
	
	public function itemType($description) {
		$this->db->where('description',$description);
        $query = $this->db->get('itemtype');
		return $query->num_rows();
    }
	
	public function addItemsType($description){
		$data = array(
            'description' => $description
        );
        $this->db->insert('itemtype', $data);
        return $this->db->insert_id();
	}
	
	public function viewItemType() {
        $query = $this->db->get('itemtype');
        return $query->result_array();
    }
	
	public function getById($tId) {
		$this->db->where('tId',$tId);
        $query = $this->db->get('itemtype');
		return $query->result_array();
    }
	
	public function updateItemType($description,$tId){
		$data = array(
            'description' => $description
        );
		$this->db->where('tId', $tId);
        $this->db->update('itemtype', $data);
	}
	
	public function loadItemType($term) {
        $this->db->like('description', $term, 'after');
        $this->db->order_by('tId', 'ASC');
        $query = $this->db->get('itemtype');
        return $query->result_array();
    }
	
	public function itemCode($itemCode) {
		$this->db->where('itemCode',$itemCode);
        $query = $this->db->get('items');
		return $query->num_rows();
    }
	
	public function itemCodeQnt($itemCode) {
		$this->db->where('itemCode',$itemCode);
        $query = $this->db->get('items');
		return $query->result_array();
    }
	
	public function updateitemCode($itemQnt,$itemCode){
		$data = array(
            'itemQnt' => $itemQnt
        );
		$this->db->where('itemCode', $itemCode);
        $this->db->update('items', $data);
	}
	
	public function addItem($tId,$itemCode,$itemName,$description,$itemQnt,$costPrice,$sellingPrice,$itemImage){
		$data = array(
            'tId' => $tId,
			'itemCode' => $itemCode,
            'itemName' => $itemName,
            'itemDescription' => $description,
			'itemQnt' => $itemQnt,
			'costPrice' => $costPrice,
			'sellingPrice' => $sellingPrice,
			'itemImage' => $itemImage
        );
        $this->db->insert('items', $data);
        return $this->db->insert_id();
	}
	
	public function viewAllItems() {
		$this->db->join('itemtype', 'itemtype.tId = items.tId');
        $query = $this->db->get('items');
        return $query->result_array();
    }
	
	public function getItemById($iId) {
		$this->db->join('itemtype', 'itemtype.tId = items.tId');
		$this->db->where('iId',$iId);
        $query = $this->db->get('items');
		return $query->result_array();
    }
	public function updateItem($tId,$itemCode,$itemName,$description,$itemQnt,$costPrice,$sellingPrice,$iId){
		$data = array(
            'tId' => $tId,
			'itemCode' => $itemCode,
            'itemName' => $itemName,
            'itemDescription' => $description,
			'itemQnt' => $itemQnt,
			'costPrice' => $costPrice,
			'sellingPrice' => $sellingPrice
        );
		$this->db->where('iId',$iId);
        $this->db->update('items', $data);
	}
}