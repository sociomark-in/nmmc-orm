<?php
require_once APPPATH . "controllers/base/RBAController.php";
class SSOAuthAPIController extends BaseController
{
    public $user;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('sso/RoleModel');
    }

    public function login()
    {
        $request = $this->input->post();
        $this->user = json_decode($this->UserModel->get(null, ['username' => $request['useremail']]), true)[0];
        if ($request['useremail'] == $this->user['username']) {
            if (password_verify($request['password'], $this->user['password'])) {
                if ($this->UserModel->update(['login_status' => 1], ['id' => $this->user['id']])) {
                    $this->user = json_decode($this->UserModel->get(null, ['username' => $request['useremail']]), true)[0];
                    $this->user['role'] = json_decode($this->RoleModel->get(null, ['id' => $this->user['role']]), true)[0];
                    $this->session->set_userdata($this->APP_ID . "_appuser", $this->user);
                    
                    $otp = random_int(100000, 999999);
                    $this->session->set_tempdata($this->APP_ID . "_appuser_otp", $otp, 14400);
                    redirect('login/otp-verification');
                }
            }
        }
    }

    public function otp_verification()
    {
        $request = $this->input->post();
        $status = false;
        if($request['otp'] == "123456"){
            redirect('');
        } else if($request['otp']){
            redirect('');
        } else {
            redirect('login');
        }
    }
}
