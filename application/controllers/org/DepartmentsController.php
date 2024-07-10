<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class DepartmentsController extends RBAController
{
    public function index()
    {
        $this->load->admin_dashboard('wards/departments/index');
    }

    public function api_dept_get_single()
    {
        $request = $this->input->post('department');
        return $this->output->set_content_type('application/json')
            ->set_output(json_encode(array('slug' => slugify($request))));
    }
}
