<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "controllers/base/RBAController.php";
class Dashboard extends RBAController
{
	public $error;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('complaints/TicketsModel');
		$this->load->model('data/AuthorsModel');
		$this->load->model('complaints/WardModel');
		$this->load->model('complaints/DepartmentModel');
		$this->load->model('complaints/ComplaintTypeModel');
		$this->error = [];
	}
	public function index()
	{
		$ward_count = [];
		$dept_count = [];
		$complaint_count = [];
		/* Tickets By Wards & Department */
		if ($this->input->get("from")) {
			$to_date = $this->input->get("to");
			$from_date = $this->input->get("from");

			$all_wards = $this->WardModel->get(null, ['created_at > ' . date_format(date_create_from_format('Ymd', $from_date), "Y-m-d H:i:s")]);
			$all_dept = json_decode($this->DepartmentModel->get(null, ['created_at > ' . date_format(date_create_from_format('Ymd', $from_date), "Y-m-d H:i:s")]), true);
			$all_complaint = json_decode($this->ComplaintTypeModel->get(null, ['created_at > ' . date_format(date_create_from_format('Ymd', $from_date), "Y-m-d H:i:s")]), true);

			foreach ($all_wards as $key => $ward) {
				$ward_count[$key]['ward'] = $ward;
				$ward_count[$key]['count'] = $this->TicketsModel->count_all(['ward_id' => $ward['id']],  ['created_at > ' . date_format(date_create_from_format('Ymd', $from_date), "Y-m-d H:i:s")]);
			}
			foreach ($all_dept as $key => $dept) {
				$dept_count[$key]['dept'] = $dept;
				$dept_count[$key]['count'] = $this->TicketsModel->count_all(['department_id' => $dept['id']],  ['created_at > ' . date_format(date_create_from_format('Ymd', $from_date), "Y-m-d H:i:s")]);
			}
			foreach ($all_complaint as $key => $complaint) {
				$complaint_count[$key]['complaint'] = $complaint;
				$complaint_count[$key]['count'] = $this->TicketsModel->count_all(['type_of_complaint' => $complaint['name']],  ['created_at > ' . date_format(date_create_from_format('Ymd', $from_date), "Y-m-d H:i:s")]);
			}
			/* Tickets By Wards & Department */
	
			$rows = json_decode($this->TicketsModel->get_all([
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
				$rows[$i]['department_id'] = json_decode($this->DepartmentModel->get(['name'], ['id' => $rows[$i]['department_id']]), true)[0]['name'];
			}
		} else {
			$all_wards = $this->WardModel->get();
			$all_dept = json_decode($this->DepartmentModel->get(), true);
			$all_complaint = json_decode($this->ComplaintTypeModel->get(), true);

			foreach ($all_wards as $key => $ward) {
				$ward_count[$key]['ward'] = $ward;
				$ward_count[$key]['count'] = $this->TicketsModel->count_all(['ward_id' => $ward['id']]);
			}
			foreach ($all_dept as $key => $dept) {
				$dept_count[$key]['dept'] = $dept;
				$dept_count[$key]['count'] = $this->TicketsModel->count_all(['department_id' => $dept['id']]);
			}
			foreach ($all_complaint as $key => $complaint) {
				$complaint_count[$key]['complaint'] = $complaint;
				$complaint_count[$key]['count'] = $this->TicketsModel->count_all(['type_of_complaint' => $complaint['name']]);
			}
			/* Tickets By Wards & Department */
	
			$rows = json_decode($this->TicketsModel->get_all([
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
				$rows[$i]['department_id'] = json_decode($this->DepartmentModel->get(['name'], ['id' => $rows[$i]['department_id']]), true)[0]['name'];
			}
		}

		




		$this->data['page']['tickets_all'] = $rows;
		$this->data['page']['tickets_count']['all'] = count($rows);
		$this->data['page']['tickets_count']['resolved'] = $this->TicketsModel->count_all(['status' => 'resolved']);
		$this->data['page']['tickets_count']['unresolved'] = $this->TicketsModel->count_all(['status' => 'unresolved']);
		$this->data['page']['tickets_count']['in_process'] = $this->TicketsModel->count_all(['status' => 'in_process']);
		$this->data['page']['tickets_count']['facebook'] = $this->TicketsModel->count_all(['source' => 'facebook']);
		$this->data['page']['tickets_count']['instagram'] = $this->TicketsModel->count_all(['source' => 'instagram']);
		$this->data['page']['tickets_count']['twitter'] = $this->TicketsModel->count_all(['source' => 'twitter']);
		$this->data['page']['tickets_count']['linkedin'] = $this->TicketsModel->count_all(['source' => 'linkedin']);
		$this->data['page']['tickets_count']['youtube'] = $this->TicketsModel->count_all(['source' => 'youtube']);
		$this->data['page']['tickets_count']['new'] = $this->TicketsModel->count_all(['status' => 'new']);
		$this->data['page']['tickets_count']['positive'] = $this->TicketsModel->count_all(['sentiment' => 'positive']);
		$this->data['page']['tickets_count']['negative'] = $this->TicketsModel->count_all(['sentiment' => 'negative']);
		$this->data['page']['tickets_count']['neutral'] = $this->TicketsModel->count_all(['sentiment' => 'neutral']);

		$this->data['page']['tickets_count']['wardwise'] = $ward_count;
		$this->data['page']['tickets_count']['departmentwise'] = $dept_count;
		$this->data['page']['tickets_count']['complaintwise'] = $complaint_count;
		$this->data['page']['list_factors']['wards'] = $this->WardModel->get(['name']);
		$this->data['page']['list_factors']['departments'] = json_decode($this->DepartmentModel->get(['name']), true);
		$this->data['page']['list_factors']['complaints'] = $this->DepartmentModel->get_complaint(['name']);

		$this->load->admin_dashboard('dashboard/basic/index', $this->data);
	}

	public function login()
	{
		$data = [
			'page' => [
				'title' => "Login Page" . " • " . APP_NAME
			]
		];
		$this->load->view('pages/login', $data);
	}
	public function register()
	{
		$formdata = $this->input->post();
	}

	public function qrcode_render()
	{
		$data  = [];
		// $this->encryption->initialize(
		// 	array(
		// 		'cipher' => ENCRYPTION_ALGO,
		// 		'mode' => ENCRYPTION_MODE,
		// 	)
		// );
		try {
			$plain_text = 'This is a plain-text message!';
			// $ciphertext = $this->encryption->encrypt($plain_text);

			// echo $ciphertext . "<br>";
			echo $this->encryption->decrypt("4f3a26d0b0fb60b6a1958caa1386578afc33dff5181e6c6ccbbf7121308ddc39b8e61ce052b6f6e8f0ae8447828bdca1679dc84f5dfb6cd47080d63897884e1cSTiaDf8XdMWZWpRUBYr5NN7rauJpE7gUVXyhjj7auDDH/RRswNL86TVA43yc500E");
		} catch (Exception $th) {
			$this->error['status'] = 'failed';
			$this->error['code'] = 'InvalidKeyError';
			$this->error['message'] = 'The Key passed does not match with the records or is expired!';
		}
		try {
			$this->load->library('QRCodeLib');
			$image = $this->qrcodelib->render($this->input->post('url'));

			$data['status'] = "success";
			$data['qrcode'] = $image;
		} catch (Exception $ex) {
			$this->error['status'] = 'failed';
			$this->error['code'] = 'InvalidData';
			$this->error['message'] = 'The Data Passed does not match with the records!';

			return $this->error;
		}

		if ($data['status'] == 'success') {
			echo "<img src='" . $data['qrcode'] . "' width='300'/>";
		} else {
			print_r(json_encode($this->error));
		}
	}
}
