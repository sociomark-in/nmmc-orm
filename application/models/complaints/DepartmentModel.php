<?php

class DepartmentModel extends CI_Model
{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table['department'] = "app_application_departments"; 
        $this->table['source'] = "app_application_source"; 
        $this->table['status'] = "app_application_status"; 
        $this->table['sentiment'] = "app_sentiment_analysis"; 
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
    
        $this->db->order_by('name',"ASC");
        return json_encode($this->db->get($this->table['department'])->result_array());
    }
    public function get_sentiment($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }

        return $this->db->get($this->table['sentiment'])->result_array();
    }
    public function get_complaint($select = null, $where = null)
    {
        if (!is_null($select)) {
            $this->db->select($select);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }
        $this->db->order_by('name',"ASC");
        return $this->db->get($this->table['complaint'])->result_array();
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
        if ($this->db->insert($this->table['department'], $data)) {
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
            if($this->db->update($this->table['department'], $data)){
                return true;
            }else {
                return false;
            }
        }
    }

    public function delete($where)
    {

        $this->db->where($where);
        if ($this->db->delete($this->table['department'])) {
            return true;
        } else{
            return false;
        }
    }
}
