<?php
class RoleModel extends CI_Model
{
    public $table, $result;
    public function __construct()
    {
        parent::__construct();
        $this->table['roles'] = "app_application_roles";
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
        $result = $this->db->get($this->table['roles'])->result_array();

        return json_encode($result);
    }
}
