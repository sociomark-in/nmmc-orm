<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class WardsController extends RBAController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('complaints/WardModel');
        $this->load->model('complaints/TicketsModel');
        $this->load->model('data/AuthorsModel');
        $this->load->model('complaints/DepartmentModel');
    }
    public function index()
    {
        $this->data['page']['wards']['list'] = $this->WardModel->get(['name', 'slug']);
        $this->load->admin_dashboard('wards/index', $this->data);
    }
    public function home()
    {
        $this->data['page']['wards']['list'] = $this->WardModel->get(['name', 'slug', 'id']);
        $this->data['wards_list'] = $this->data['page']['wards']['list'];
        $this->load->admin_dashboard('wards/new', $this->data);
    }
    public function edit($slug)
	{
		$this->load->model('complaints/WardModel');
		$this->data['page']['slug'] = $slug;
        $this->data['page']['ward']['list'] = $this->WardModel->get(['name', 'slug','id']);
        $this->data['wards_list'] = $this->data['page']['ward']['list'];
        $this->data['page']['ward'] = $this->WardModel->get(null, ['id' => $slug])[0];
        // print_r( $this->data['page']['department']);exit;
		$this->load->admin_dashboard('wards/edit', $this->data);
	}

    public function single($slug)
    {
        $ward = $this->WardModel->get(null, ['slug' => $slug])[0];
        $id = $ward['id'];
        $departments = $this->DepartmentModel->get();
        $complaints['count'] = $this->TicketsModel->count_group_by(['department_id as ' . 'department', 'COUNT(*) as '  . 'count'], ['ward_id' => $id], 'department_id');
        $complaints['processed'] = $complaints['count'];
        for ($i = 0; $i < count($complaints['processed']); $i++) {
            $complaint = $complaints['processed'][$i];
            $complaint['department'] = $this->DepartmentModel->get(null, ['id' => $complaint['department']])[0];
            $complaints['processed'][$i] = $complaint;
        }

        $complaints['data'] = json_decode($this->TicketsModel->get(null, ['ward_id' => $id]), true);

        for ($i = 0; $i < count($complaints['data']); $i++) {
            $complaint = $complaints['data'][$i];
            $complaint['department'] = $this->DepartmentModel->get(null, ['id' => $complaint['department_id']])[0];
            $complaint['ward'] = $ward;
            $complaints['data'][$i] = $complaint;
        }

        $this->data['page']['ward'] = $ward;
        $this->data['page']['complaints']['data'] = $complaints['data'];
        $this->data['page']['complaints']['count']['all'] = $this->TicketsModel->count_all(['ward_id' => $id]);
        $this->data['page']['complaints']['count']['department_wise'] = $complaints['processed'];

        $this->load->admin_dashboard('wards/single', $this->data);
    }
}
