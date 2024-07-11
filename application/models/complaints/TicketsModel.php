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
	public function get($columns = null, $where = null)
	{
		if (!is_null($columns)) {
			$this->db->select($columns);
		}
		if (!is_null($where)) {
			$this->db->where($where);
		}
		$this->db->order_by('created_at', 'DESC');
		$result = $this->db->get($this->table['blogs'])->result_array();

		return json_encode($result);
	}
	public function insert($data)
	{
		if ($this->db->insert($this->table['blogs'], $data)) {
			return true;
		} else {
			return false;
		}
	}
	public function update($where, $data)
	{
		if (!is_null($where) && !is_null($data)) {
			return $this->db->update($this->table['blogs'], $data, $where);
		}
	}
	public function delete($where)
	{

		$this->db->where($where);
		if ($this->db->delete($this->table['blogs'])) {
			return true;
		} else {
			return false;
		}
	}
}
