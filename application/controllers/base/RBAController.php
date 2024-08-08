<?php
require_once APPPATH . "controllers/base/BaseController.php";
class RBAController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        if(!$this->session->has_userdata($this->APP_ID . "_appuser")){
            $this->UserModel->update(['login_status' => 0]);
            redirect('login');
        }
        $this->data['session'] = $this->session->get_userdata($this->APP_ID . "_appuser");
        $this->data['session']['appuser'] = $_SESSION[$this->APP_ID . "_appuser"];
        $accessibility = json_decode($_SESSION[$this->APP_ID . "_appuser"]['role']['accessibility'], true);
       /* if($accessibility[0] == "*"){
       } 
       else {
           if(!str_contains(current_url(), "api/v2/")){
                if(!in_array(explode(base_url(), current_url())[1], $accessibility)){
                    header('HTTP/1.0 401 Unauthorized');
                    echo "<h1>401 - Unauthorized Access!</h1>";
                    echo "<a href='". base_url() ."'>Go to Dashboard</a>";
                    die;
                }
           }
       } */
    }
}
