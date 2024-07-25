<?php

class WardModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['complaint'] = "app_application_complaint";
    }

    public function get($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->order_by('name', "ASC");
        return $this->db->get($this->table['categories'])->result_array();
    }
    public function insert($data)
    {
        if ($this->db->insert($this->table['categories'], $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function update($where, $data)
    {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($data)) {
            if ($this->db->update($this->table['categories'], $data)) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function delete($where)
    {
        $this->db->where($where);
        if ($this->db->delete($this->table['categories'])) {
            return true;
        } else {
            return false;
        }
    }
}
