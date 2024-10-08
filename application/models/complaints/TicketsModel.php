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

	public function count_($columns = null, $group_by = null)
	{
		if (!is_null($columns)) {
			$this->db->select($columns);
		}
		if (!is_null($group_by)) {
			// $this->db->where($where);
			$this->db->group_by($group_by);
		}

		return $this->db->get($this->table['tickets'])->result_array();
	}
	public function count_all($where = null)
	{
		if (!is_null($where)) {
			$this->db->where($where);
		}
		return $this->db->count_all_results($this->table['tickets']);
	}

	public function count_group_by($select = null, $where = null, $group_by = null)
	{
		if (!is_null($select)) {
			$this->db->select($select);
		}
		if (!is_null($where)) {
			$this->db->where($where);
		}
		if (!is_null($group_by)) {
			$this->db->group_by($group_by);
		}
		return $this->db->get($this->table['tickets'])->result_array();
	}

	public function get_all($columns = null)
	{
		if (!is_null($columns)) {
			$this->db->select($columns);
		}
		$this->db->order_by('id','DESC');
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
		$result = $this->db->get($this->table['tickets'])->result_array();

		return json_encode($result);
	}

	public function insert($data)
	{
		if ($this->db->insert($this->table['tickets'], $data)) {
			return true;
		} else {
			return false;
		}
	}
	public function update($where, $data)
	{
		if (!is_null($where) && !is_null($data)) {
			return $this->db->update($this->table['tickets'], $data, $where);
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
