<?php
require_once APPPATH . "controllers/base/RBAController.php";
class ComplaintsTypeController extends RBAController
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('data/AuthorsModel');
		$this->load->model('complaints/ComplaintTypeModel');
	}

    public function home() {
        $rows = json_decode($this->ComplaintTypeModel->get(['id', 'name']), true);
        // echo "<pre>";
        // print_r($rows);
        // echo "</pre>";
        $this->data['page']['data']['complaint_types'] = $rows;
        $this->load->admin_dashboard('complaints/new', $this->data);
    }
    public function new() {
    }
}
