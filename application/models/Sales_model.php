<?php

class Sales_model extends CI_Model {
	public function addSale($customerName){
		$data = array(
            'customerName' => $customerName
        );
        $this->db->insert('sales', $data);
        return $this->db->insert_id();
	}
	
	public function updateItemQnt($iId,$itemQnt){
		$data = array(
			'itemQnt' => $itemQnt
        );
		$this->db->where('iId',$iId);
        $this->db->update('items', $data);
	}
	
	public function addSummary($sId,$iId,$qnt){
		$data = array(
            'sId' => $sId,
			'iId' => $iId,
			'qnt' => $qnt
        );
        $this->db->insert('summary', $data);
        return $this->db->insert_id();
	}
}