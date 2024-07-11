<?php

class TicketsModel extends CI_Model
{
	public $data;
	public $table;

	public function __construct()
	{
		parent::__construct();
		$this->table['blogs'] = 'app_complaint_tickets';
	}

	public function get_all($columns = null, $where = null)
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
