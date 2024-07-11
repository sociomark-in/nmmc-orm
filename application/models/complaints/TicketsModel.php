<?php

class TicketsModel extends CI_Model
{
	public $data;
	public $table;

	public function __construct()
	{
		parent::__construct();
		$this->table['tickets'] = 'app_complaint_tickets';
	}

	public function count_status($columns = null, $where = null){
		if (!is_null($columns)) {
			$this->db->select($columns);
		}
		if (!is_null($where)) {
			$this->db->where($where);
		}
		$this->db->group_by(["DATE_FORMAT(created_at, '%Y-%m')", "status"]);

		 return $this->db->get($this->table['tickets'])->result_array();
	}
	public function count_all($where = null){
		 return $this->db->count_all_results($this->table['tickets']);
	}

	public function get_all($columns = null)
	{
		if (!is_null($columns)) {
			$this->db->select($columns);
		}
		$this->db->order_by('created_at', 'DESC');
		$result = $this->db->get($this->table['tickets'])->result_array();

		return json_encode($result);
	}
}
?>
