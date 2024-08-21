<?php
require_once APPPATH . "controllers/base/RBAController.php";
class ComplaintsAPIController extends RBAController
{
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('complaints/TicketsModel');
		$this->load->model('data/AuthorsModel');
		$this->load->model('complaints/WardModel');
		$this->load->model('complaints/DepartmentModel');
		$this->load->model('complaints/ComplaintTypeModel');
		$this->data['session'] = $this->session->get_userdata($this->APP_ID . "_appuser");
	}

	public function api_complaints_count()
	{
		$get_data = $this->input->get();
		$post_data = $this->input->post();
		$output = [];
		$newArray = [];
		$final['data'] = [];
		$final['months'] = [];
		$final['duration'] = [];
		
		switch ($get_data['type']) {
			case 'pie':
				$final['data'] = [
					'labels' => [],
					'series' => [],
				];
				break;

			default:
				$final['data'] = [];
				break;
		}
		switch ($get_data['by']) {
			case 'status':
				switch ($get_data['type']) {
					case 'bar':

						break;

					default:
						if ($get_data['months'] == 12) {
							$output = $this->TicketsModel->count_(['status as ' . $post_data['output'][0], 'COUNT(*) as '  . $post_data['output'][1], "DATE_FORMAT(created_at, '%Y-%m') AS month"], ["DATE_FORMAT(created_at, '%Y-%m') >= 2023-01"]);
						} else {
							$output = $this->TicketsModel->count_(['status as ' . $post_data['output'][0], 'COUNT(*) as '  . $post_data['output'][1], "DATE_FORMAT(created_at, '%Y-%m') AS month"]);
						}

						$c = $output;


						// Loop through the original array
						foreach ($c as $item) {
							$name = $item["name"];
							$data = $item["data"];
							$month = $item["month"]; // You can remove this if not needed in the new structure

							// Check if the name already exists in the new array
							if (isset($newArray[$name])) {
								// If it exists, append the data to its existing data array
								$newArray[$name]["data"][] = $data;
							} else {
								// If it doesn't exist, create a new entry with name and data array
								$newArray[$name] = [
									"name" => $name,
									"data" => [$data],
								];
							}
							array_push($final['duration'], $month);
						}
						$final['duration'] = array_unique($final['duration']);
						foreach ($newArray as $key => $value) {
							array_push($final['data'], $value);
						}
						foreach ($final['duration'] as $key => $m) {
							array_push($final['months'], $m);
						}
						break;
				}
				# code...

				break;

			case 'ward':
				switch ($get_data['type']) {
					case 'pie':
						$labels = [];
						$series = [];
						foreach ($this->WardModel->get(['name']) as $key => $label) {
							array_push($labels, $label['name']);
						}
						foreach ($this->TicketsModel->count_(['COUNT(*) as `count`'], ['ward_id']) as $key => $sequence) {
							array_push($series, (int)$sequence['count']);
						}
						$final['data'] = [
							'labels' => $labels,
							'series' => $series,
						];
						break;
					case 'bar':
						$labels = [];
						$series = [];
						foreach ($this->WardModel->get(['name']) as $key => $label) {
							array_push($labels, $label['name']);
						}
						foreach ($this->db->query("SELECT COALESCE(COUNT(`app_complaint_tickets`.`id`), 0) AS 'count' FROM `app_application_wards` LEFT JOIN `app_complaint_tickets` ON `app_application_wards`.`id` = `app_complaint_tickets`.`ward_id` GROUP BY `app_application_wards`.`name`;")->result_array() as $key => $sequence) {
							array_push($series, (int)$sequence['count']);
						}
						$final['data'] = [
							'labels' => $labels,
							'series' => $series,
						];
						break;

					default:
						$final['data'] = [];
						break;
				}
				break;

			case 'sentiment':
				switch ($get_data['type']) {
					case 'pie':
						$series = [];
						// $labels = [];
						// foreach ($this->WardModel->get(['name']) as $key => $label) {
						// 	array_push($labels, $label['name']);
						// }
						$labels = ['Negative', 'Neutral', 'Positive'];
						foreach ($this->TicketsModel->count_(['COUNT(*) as `count`'], ['sentiment']) as $key => $sequence) {
							array_push($series, (int)$sequence['count']);
						}
						$final['data'] = [
							'labels' => $labels,
							'series' => $series,
						];
						break;

					default:
						$final['data'] = [];
						break;
				}
				break;
			case 'department':
				# code...
				break;
			default:
				# code...
				break;
		}
		if ($get_data['by'] == 'status') {
		}
		return $this->output
			->set_content_type('application/json')
			->set_output(json_encode(array('output' => [$final])));
	}

	public function api_complaints_add()
	{
		$form_data = $this->input->post();
		$data = $form_data;
		if ($this->TicketsModel->insert($data)) {
			redirect('complaints/all-tickets');
		}
	}
	public function api_complaints_update()
	{
		$form_data = $this->input->post();
		$data = [
			"name" => $form_data['name'],
			"source" => $form_data['source'],
			"department_id" => $form_data['department_id'],
			"ward_id" => $form_data['ward_id'],
			"type_of_complaint" => json_decode($this->ComplaintTypeModel->get(['name'], ['id' => $form_data['type_of_complaint']]), true)[0]['name'],
			"message" => $form_data['message'],
			"source_link" => $form_data['source_link'],
			"sentiment" => $form_data['sentiment'],
			"comments" => $form_data['comment'],
			"status" => $form_data['status'],
		];
		// 		print_r($data);exit;
		if ($this->TicketsModel->update(['id' => $form_data['ticket_id']], $data))
			// redirect($this->input->get_request_header('Referer'));
			redirect('complaints/all-tickets');
		die;
	}

	/* Get All Categories */
	public function api_category_get()
	{
		$data = $this->input->get();
		$result = $this->CategoryModel->get(null, ['id' => $data['id']])[0];
		return $this->output->set_content_type('application/json')->set_output(json_encode(['status' => 'active', 'data' => $result]));
	}
	/* Get Single Category */
	public function api_category_get_single() {}
	public function api_category_insert()
	{
		$form_data = $this->input->post();
		$data = $form_data;
		$this->load->model('blogposts/CategoryModel');
		if ($this->CategoryModel->insert($data)) {
			redirect($this->input->get_request_header('Referer'));
		}
	}
	public function api_category_update()
	{
		$form_data = $this->input->post();

		print_r($form_data);
		die;

		foreach ($form_data as $key => $field) {
			if (!empty($field) || is_string($field) && trim($field) !== "") {
				$data[$key] = $field;
			}
		}
		$where = array_pop($data);
		// print_r($data);
		// print_r($where);
		if ($this->CategoryModel->update(['id' => $where], $data)) {
			redirect($this->input->get_request_header('Referer'));
		}
	}
	public function api_category_delete()
	{
		$data = $this->input->post('cat_id');
		if ($this->CategoryModel->delete(['id' => $data])) {
			redirect($this->input->get_request_header('Referer'));
		}
	}


	public function api_tag_insert()
	{
		$form_data = $this->input->post();
		$data = $form_data;
		$tag = slugify($form_data['title']);
		$data['uslug'] = $tag;
		$this->load->model('blogposts/TagModel');
		if ($this->TagModel->insert($data)) {
			redirect($this->input->get_request_header('Referer'));
		}
	}
	public function api_tag_get()
	{
		$data = $this->input->get();
		$result = $this->TagModel->get(null, ['id' => $data['id']])[0];
		return $this->output->set_content_type('application/json')->set_output(json_encode(['status' => 'active', 'data' => $result]));
	}
	public function api_tag_edit() {}
	public function api_tag_delete() {}
}
