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
		$this->load->model('complaints/ComplaintModel');
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

		// print_r($rows);
		for ($i = 0; $i < count($rows); $i++) {
			$rows[$i]['ward_id'] = $this->WardModel->get(['name'], ['id' => $rows[$i]['ward_id']])[0]['name'];
			$rows[$i]['department_id'] = $this->DepartmentModel->get(['name'], ['id' => $rows[$i]['department_id']])[0]['name'];
		}
		$this->data['tickets_all'] = $rows;
		$this->data['page']['tickets_count']['all'] = count($rows);
		$this->data['page']['tickets_count']['resolved'] = $this->TicketsModel->count_all(['status' => 'resolved']);
		$this->data['page']['tickets_count']['unresolved'] = $this->TicketsModel->count_all(['status' => 'unresolved']);
		$this->data['page']['tickets_count']['in_process'] = $this->TicketsModel->count_all(['status' => 'in_process']);
		$this->data['page']['tickets_count']['facebook'] = $this->TicketsModel->count_all(['source' => 'facebook']);
		$this->data['page']['tickets_count']['instagram'] = $this->TicketsModel->count_all(['source' => 'instagram']);
		$this->data['page']['tickets_count']['twitter'] = $this->TicketsModel->count_all(['source' => 'twitter']);
		$this->data['page']['tickets_count']['new'] = $this->TicketsModel->count_all(['status' => 'new']);
		$this->load->admin_dashboard('tickets/home', $this->data);
	}

	public function test_complaint()
	{
		$output = json_encode($this->TicketsModel->count_status(['status as ' . 'name', 'COUNT(*) as '  . 'data', "DATE_FORMAT(created_at, '%Y-%m') AS month"], ["DATE_FORMAT(created_at, '%Y-%m') >= 2023-01"]));
	}

	public function new()
    {
        $this->data['page']['complaint']['list'] = $this->ComplaintModel->get(['name', 'slug', 'id']);
        $this->data['complaint_list'] = $this->data['page']['complaint']['list'];
        $this->load->admin_dashboard('complaint/new', $this->data);
    }
    // public function edit($slug)
	// {
	// 	$this->load->model('complaints/ComplaintModel');
	// 	$this->data['page']['slug'] = $slug;
    //     $this->data['page']['complaint']['list'] = $this->ComplaintModel->get(['name', 'slug','id']);
    //     $this->data['complaint_list'] = $this->data['page']['complaint']['list'];
    //     $this->data['page']['complaint'] = $this->ComplaintModel->get(null, ['id' => $slug])[0];
    //     // print_r( $this->data['page']['department']);exit;
	// 	$this->load->admin_dashboard('complaint/edit', $this->data);
	// }


	public function new_ticket()
	{
		$this->load->model('complaints/DepartmentModel');
		$this->load->model('complaints/WardModel');
		$this->data['page']['department'] = json_decode($this->DepartmentModel->get(), true);
		$this->data['page']['ward'] = $this->WardModel->get();
		$this->data['page']['source'] = $this->DepartmentModel->get_source();
		$this->data['page']['status'] = $this->DepartmentModel->get_status();
		$this->data['page']['sentiment'] = $this->DepartmentModel->get_sentiment();
		$this->data['page']['complaint'] = $this->DepartmentModel->get_complaint();
		$this->load->admin_dashboard('tickets/new', $this->data);
	}

	// INSERT INTO `cms_posts`(`id`, `title`, `content`, `excerpt`, `image_url`, `category`, `tags`, `seo_title`, `seo_desc`, `seo_thumb`, `author_id`, `created_at`, `updated_at`, `uslug`, `views`, `status`)

	public function edit($slug)
	{
		$this->load->model('complaints/DepartmentModel');
		$this->load->model('complaints/TicketsModel');
		$this->load->model('complaints/WardModel');
		$this->data['page']['ticket'] = json_decode($this->TicketsModel->get(null, ['id' => $slug]), true)[0];
		$this->data['page']['department'] = json_decode($this->DepartmentModel->get());
		$this->data['page']['source'] = $this->DepartmentModel->get_source();
		$this->data['page']['status'] = $this->DepartmentModel->get_status();
		$this->data['page']['sentiment'] = $this->DepartmentModel->get_sentiment();
		$this->data['page']['complaint'] = $this->DepartmentModel->get_complaint();
		$this->data['page']['ward'] = $this->WardModel->get();
		$this->data['page']['slug'] = $slug;
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
