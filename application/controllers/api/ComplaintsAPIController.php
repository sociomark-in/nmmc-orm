<?php 
require_once APPPATH . "controllers/base/RBAController.php";
final class ComplaintsAPIController extends RBAController
{
    public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/TicketsModel');
		$this->load->model('data/AuthorsModel');
		$this->load->model('blogposts/CategoryModel');
		$this->data['session'] = $this->session->get_userdata($this->APP_ID . "_appuser");
	}

    public function api_complaints_add(){
		$data = $this->input->post();
		print_r($data);
	}

	/* Get All Categories */
	public function api_category_get()
	{
		$data = $this->input->get();
		$result = $this->CategoryModel->get(null, ['id' => $data['id']])[0];
		return $this->output->set_content_type('application/json')->set_output(json_encode(['status' => 'active', 'data' => $result]));
	}
	/* Get Single Category */
	public function api_category_get_single()
	{
	}
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
	public function api_tag_edit()
	{
	}
	public function api_tag_delete()
	{
	}
}
