<?php
require_once APPPATH . "controllers/base/RBAController.php";
class WardsAPIController extends RBAController
{
    private $request, $response;

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

    public function api_ward_get_single(){
        $select = $this->input->get('columns');
        $where = ['name' => $this->input->post('department')];

        $department = json_decode($this->WardModel->get($select, $where), true);

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('slug' => $department['slug'])));
    }
    
    public function api_ward_add()
    {
        $form_data = $this->input->post();
        $form_data['slug'] = slugify($form_data['name']);
        if ($this->WardModel->insert($form_data)) {
            redirect('ward/new');
        }
    }

    public function api_ward_edit()
    {
        $request = $this->input->post();
        if ($this->WardModel->update(['id' => $request['ward_id']], ['name' => $request['name'], 'slug' => slugify($request['name'])])) {
            if ($this->agent->is_referral()) {
                redirect($this->agent->referrer());
            } else {
                redirect(base_url('wards'));
            }
        }
    }
}
