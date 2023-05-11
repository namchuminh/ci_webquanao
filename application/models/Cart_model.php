<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function updateSize($transaction_id, $size){
		$sql = "UPDATE `order` SET `size`= ? WHERE `transaction_id`= ?";
		$result = $this->db->query($sql, array($size, $transaction_id));
		return $result;
	}

	public function getSize($transaction_id){
		$sql = "SELECT order.size FROM webshop.order WHERE `transaction_id`= ?";
		$result = $this->db->query($sql, array($transaction_id));
		return $result->result_array();
	}
}

/* End of file Cart_model.php */
/* Location: ./application/models/Cart_model.php */