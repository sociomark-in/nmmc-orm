<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class WardsController extends RBAController
{
    public function index(){
        $this->load->admin_dashboard('wards/index');
    }       
}
