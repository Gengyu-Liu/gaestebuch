<?php

class Gaestebuch extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('gaestebuch_model');
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
    }

    public function index() {
        $data = [
            'name' => '',
            'email' => '',
            'kommentar' => 'Kommentar bitte hier schreiben',
            'submit' => 'Add',
        ];
        $this->load->view('templates/header');
        $this->validate();
        if ($this->form_validation->run()) {
            $this->gaestebuch_model->set();
            $this->load->view('gaestebuch/addSuccess');
        } else {
            $this->load->view('gaestebuch/home', $data);
        }
        $data['gaestebuch'] = $this->gaestebuch_model->get();
        $this->load->view('gaestebuch/show', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $original = $this->gaestebuch_model->get_where($id);
        $data = [
            'name' => $original['name'],
            'email' => $original['email'],
            'kommentar' => $original['kommentar'],
            'submit' => 'Update',
            'id'=>$id,
        ];
        $this->load->view('templates/header');
        $this->validate();
        if ($this->form_validation->run()) {
            $this->gaestebuch_model->update($id);
            $this->load->view('gaestebuch/updateSuccess',$data);
        } else {
            $this->load->view('gaestebuch/home', $data);
        }
        $data['gaestebuch'] = $this->gaestebuch_model->get();
        $this->load->view('gaestebuch/show', $data);
        $this->load->view('templates/footer');
    }
    public function delete($id){
        $data['id'] = $id;
        $this->load->view('templates/header');
        $this->gaestebuch_model->delete($id);
        $this->load->view('gaestebuch/delSuccess',$data);
        $data['gaestebuch'] = $this->gaestebuch_model->get();
        $this->load->view('gaestebuch/show', $data);
        $this->load->view('templates/footer');
    }
    /**
     * für Popup Fenster
     * @param int $id
     */
    public function view($id){
        $data['id'] = $id;
        $this->load->view('templates/header');
        $this->load->view('gaestebuch/dialog',$data);
        $data['gaestebuch'] = $this->gaestebuch_model->get();
        $this->load->view('gaestebuch/show', $data);
        $this->load->view('templates/footer');
    }
    public function search(){
        $this->load->view('templates/header');
        $this->form_validation->set_rules('search', 'Search', 'trim|strip_tags|required|min_length[1]');
        if ($this->form_validation->run()) {
            $data['gaestebuch'] = $this->gaestebuch_model->search();
            if($data['gaestebuch'] == null)
                $this->load->view('gaestebuch/noResult');
            else
                $this->load->view('gaestebuch/show', $data);
        } else {
            $this->load->view('gaestebuch/search');
        }
        $this->load->view('templates/footer');
    }
    public function orderBy($spalte, $order){
        $data['gaestebuch'] = $this->gaestebuch_model->orderBy($spalte, $order);
        $this->load->view('templates/header');
        $this->load->view('gaestebuch/show', $data);
        $this->load->view('templates/footer');
    }
    private function validate() {
        $this->form_validation->set_rules('name', 'Name', 'trim|strip_tags|ucwords|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|strip_tags|strtolower|required|valid_email');
        $this->form_validation->set_rules('kommentar', 'Kommentar', 'trim|htmlentities|required|min_length[10]');
    }

}
