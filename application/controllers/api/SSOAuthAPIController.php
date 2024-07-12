<?php 
require_once APPPATH . "controllers/base/RBAController.php";
class SSOAuthAPIController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login(){
        $request = $this->input->post();
    }
    public function register(){

    }
}
