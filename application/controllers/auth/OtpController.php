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
    public function verify()
    {
        $otp_data = $this->session->userdata('otp');
        $current_date = date('Y-m-d h:i:s');
        $otp_time = $otp_data['date'];
        $og_otp = $otp_data['otp'];
        $current_date = date_create($current_date);
        $present_date = date_create($otp_time);
        $diff = date_diff($current_date, $present_date);
        $user_otp = $this->input->post('otp');

        if ($diff->i > 5) {
            $result = array(
                'status' => FALSE,
                'code' => 500,
                'icon' => 'error',
                'title' => 'This OTP is expired!!',
                'url' => ''
            );
            $this->session->set_flashdata('error', 'This OTP is expired!!');
        } elseif ($og_otp == $user_otp) {
            $result = array(
                'status' => TRUE,
                'code' => 200,
                'icon' => 'success',
                'title' => 'OTP matched!',
                'url' => base_url('changepassword/reset_pass')
            );
            $this->session->set_flashdata('error', 'OTP matched!');
        } else {
            $result = array(
                'status' => FALSE,
                'code' => 500,
                'icon' => 'error',
                'title' => 'OTP does not matched!!',
                'url' => ''
            );
            $this->session->set_flashdata('error', 'OTP does not matched!!');
        }
        echo json_encode($result);
    }

    public function logout()
    {
        $this->user = $_SESSION[$this->APP_ID . "_appuser"];
        if (!$this->session->has_userdata($this->APP_ID . "_appuser")) {
            redirect('login');
        } else {
            if ($this->UserModel->update(['login_status' => 0], ['id' => $this->user['id']])) {
                $this->session->unset_userdata($this->APP_ID . "_appuser");
                $this->load->mini_layout('pages/logout', $this->data);
            }
        }
    }
}
