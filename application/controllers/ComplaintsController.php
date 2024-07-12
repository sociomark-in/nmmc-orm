<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class ComplaintsController extends RBAController
{
	/* 
	$output = [
		[
			"name" => "in_process",
			"data" => 11,
		]
	]; 
	*/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('complaints/TicketsModel');
		$this->load->model('data/AuthorsModel');
		$this->load->model('complaints/WardModel');
		$this->load->model('complaints/DepartmentModel');
	}

	public function home()
	{
		$rows = json_decode($this->TicketsModel->get_all([
			"id",
			"source",
			"department_id",
			"ward_id",
			"type_of_complaint",
			"message",
			"source_link",
			"status",
			"created_at",
			"updated_at",
		]), true);

		for ($i = 0; $i < count($rows); $i++) {
			$rows[$i]['ward_id'] = $this->WardModel->get(['name'], ['id' => $rows[$i]['ward_id']])[0]['name'];
			$rows[$i]['department_id'] = $this->DepartmentModel->get(['name'], ['id' => $rows[$i]['department_id']])[0]['name'];
		}
		$this->data['tickets_all'] = $rows;
		$this->load->admin_dashboard('tickets/home', $this->data);
	}

	public function test_complaint()
	{
		$output = json_encode($this->TicketsModel->count_status(['status as ' . 'name', 'COUNT(*) as '  . 'data', "DATE_FORMAT(created_at, '%Y-%m') AS month"], ["DATE_FORMAT(created_at, '%Y-%m') >= 2023-01"]));
	}


	public function new_ticket()
	{
		$this->load->model('complaints/DepartmentModel');
		$this->load->model('complaints/WardModel');
		$this->data['page']['department'] = $this->DepartmentModel->get();
		$this->data['page']['ward'] = $this->WardModel->get();
		$this->load->admin_dashboard('tickets/new', $this->data);
	}

	// INSERT INTO `cms_posts`(`id`, `title`, `content`, `excerpt`, `image_url`, `category`, `tags`, `seo_title`, `seo_desc`, `seo_thumb`, `author_id`, `created_at`, `updated_at`, `uslug`, `views`, `status`)

	public function edit($slug)
	{
		$this->load->model('complaints/DepartmentModel');
		$this->load->model('complaints/TicketsModel');
		$this->load->model('complaints/WardModel');
		$this->data['page']['ticket'] = json_decode($this->TicketsModel->get(null, ['id' => $slug]), true)[0];
		$this->data['page']['department'] = $this->DepartmentModel->get();
		$this->data['page']['ward'] = $this->WardModel->get();
		$this->load->admin_dashboard('tickets/edit', $this->data);
	}

	public function categories()
	{
		$this->load->model('blogposts/CategoryModel');
		$this->load->model('blogposts/TagModel');
		$this->data['categories'] = $this->CategoryModel->get();
		$this->data['tags'] = $this->TagModel->get();
		// print_r($this->data['tags']);die;
		$this->load->admin_dashboard('tickets/categories', $this->data);
	}
}
