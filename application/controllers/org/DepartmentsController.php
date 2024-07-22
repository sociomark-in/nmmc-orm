<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class DepartmentsController extends RBAController
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
        $this->data['page']['departments']['list'] = json_decode($this->DepartmentModel->get(['name', 'slug','id']),true);
        $this->load->admin_dashboard('wards/departments/index', $this->data);
    }
    public function home()
    {
        $this->data['page']['departments']['list'] = json_decode($this->DepartmentModel->get(['name', 'slug','id']),true);
        $this->data['department_list'] = $this->data['page']['departments']['list'];
        $this->load->admin_dashboard('wards/departments/new', $this->data);
    }
    public function api_department_add()
    {
        $form_data = $this->input->post();
        $form_data['slug'] = slugify($form_data['name']);
        // $slug = $this->string_filter($this->input->post('name'));
        // $data = array(
        //     'name' => $form_data,
        //     'slug' => $slug,
        // );
        // print_r($data);
        if ($this->DepartmentModel->insert($form_data)) {
            redirect('departments/new');
        }
    }
    public function string_filter($string)
    {

        $string = preg_replace('/[^A-Za-z0-9\-\']/', '', str_replace(' ', '-', strtolower($string)));

        return $string;
    }
    public function api_department_edit($slug)
	{
		$this->load->model('complaints/DepartmentModel');
		$this->data['page']['slug'] = $slug;
        $this->data['page']['departments']['list'] = json_decode($this->DepartmentModel->get(['name', 'slug','id']),true);
        $this->data['department_list'] = $this->data['page']['departments']['list'];
        $this->data['page']['department'] = json_decode($this->DepartmentModel->get(null, ['id' => $slug]), true)[0];
		$this->load->admin_dashboard('wards/departments/edit', $this->data);
	}
    public function api_department_update()
	{
		$form_data = $this->input->post();
        $slug = $this->string_filter($this->input->post('name'));
		$data = [
			"name" => $form_data,
			"slug" => $slug,
		];
        // print_r($data);exit;
		if ($this->DepartmentModel->update(['id' => $form_data['department_id']], $data))
			// redirect($this->input->get_request_header('Referer'));
			redirect('wards/departments/new');
		die;
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
