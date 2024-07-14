<?php
class UserModel extends CI_Model
{
    public $table, $result;
    public function __construct()
    {
        parent::__construct();
        $this->table['users'] = "app_application_users";
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
		$result = $this->db->get($this->table['users'])->result_array();

		return json_encode($result);
	}
    public function update($data, $where = null) : bool
	{
        if (!is_null($where)) {
            $this->db->where($where);
        }
		if (!is_null($data)) {
            if($this->db->update($this->table['users'],$data)){
                return true;
            } else {
                return false;
            }
		}
	}

    public function authorize(array $request){
        $result = $this->db->query("SELECT * FROM `panel_users` WHERE `username` = '" . $request['username'] . "'")->result()[0];
        if($result->username == 'admin1'){
            if($request['password'] == $result->password){
                return (array)$result;
            }
        }else{
            if(password_verify($request['password'],$result->password)){
                return (array)$result;
            }
        }
    }

    public function new($data){
        $this->db->insert('users', $data);
    }
}
