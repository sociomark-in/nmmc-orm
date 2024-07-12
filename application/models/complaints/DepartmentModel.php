<?php

class DepartmentModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['tags'] = "app_application_departments"; 
        $this->table['source'] = "app_application_source"; 
        $this->table['status'] = "app_application_status"; 
        
    }

    public function get($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }

        return $this->db->get($this->table['tags'])->result_array();
    }
    public function get_source($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }

        return $this->db->get($this->table['source'])->result_array();
    }
    public function get_status($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }

        return $this->db->get($this->table['status'])->result_array();
    }
    public function insert($data)
    {
        if ($this->db->insert($this->table['tags'], $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($where, $data)
    {
        if (!is_null($where) && !is_null($data)) {
            return $this->db->update($this->table['tags'], $data, $where);
        }
    }

    public function delete($where)
    {

        $this->db->where($where);
        if ($this->db->delete($this->table['tags'])) {
            return true;
        } else{
            return false;
        }
    }
}
