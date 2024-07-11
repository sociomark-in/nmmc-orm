<?php 
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class SSOController extends RBAController
{
    public function login(){
        $this->load->mini_layout('pages/login');
    }    
}
