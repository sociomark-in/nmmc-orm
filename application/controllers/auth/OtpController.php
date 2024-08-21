<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";
class OtpController extends BaseController
{
    public $user;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }
    
    public function otp()
    {
        $this->load->mini_layout('pages/otp', $this->data);
    }
    
    public function logout()
    {
        $this->user = $_SESSION[$this->APP_ID . "_appuser"];
        if (!$this->session->has_userdata($this->APP_ID . "_appuser")) {
            redirect('login');
        } else {
            if($this->UserModel->update(['login_status' => 0], ['id' => $this->user['id']])){
                $this->session->unset_userdata($this->APP_ID . "_appuser");
                $this->load->mini_layout('pages/logout', $this->data);
            }
        }
    }
}
