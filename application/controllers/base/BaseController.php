<?php

class BaseController extends CI_Controller
{
    public $APP_ID, $SITE_URL, $CLIENT_NAME;
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->APP_ID = "vcdojtxev66laxb0";
        $this->CLIENT_NAME = "NMMC Complaints Management ORM";
        $this->SITE_URL = "https://www.v3staffing.in";
        $this->data['APP_ID'] = "vcdojtxev66laxb1";
        $this->data['CLIENT_NAME'] = $this->CLIENT_NAME;
        $this->data['SITE_URL'] = "https://www.v3staffing.in";
    }
}
