<?php

class ComplaintTypeModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['complaint'] = "app_application_complaints";
    }

    public function get($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }

        return $this->db->get($this->table['complaint'])->result_array();
    }
    public function insert($data)
    {
        if ($this->db->insert($this->table['complaint'], $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($where, $data)
    {
        if (!is_null($where) && !is_null($data)) {
            return $this->db->update($this->table['complaint'], $data, $where);
        }
    }

    public function delete($where)
    {

        $this->db->where($where);
        if ($this->db->delete($this->table['complaint'])) {
            return true;
        } else{
            return false;
        }
    }
}
