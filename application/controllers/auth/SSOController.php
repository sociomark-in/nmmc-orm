<?php 
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/BaseController.php";
class SSOController extends BaseController
{
    public function login(){
        $this->load->mini_layout('pages/login', $this->data);
    }
    
    public function logout(){
        $this->session->unset_userdata($this->APP_ID . "_appuser");
        $this->load->mini_layout('pages/logout', $this->data);
    }
}
