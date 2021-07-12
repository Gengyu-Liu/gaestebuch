<?php
class Gaestebuch_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    public function set() {
        $data = [
            'name'=> $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'kommentar' => $this->input->post('kommentar'),
        ];
        $this->db->insert('gaestebuch',$data);
    }
    public function get() {
        $this->db->order_by('id','DESC');
        $query = $this->db->get('gaestebuch');
        return $query->result_array();
    }
    public function get_where($id){
        $query = $this->db->get_where('gaestebuch', ['id'=>$id]);
        return $query->row_array();
    }
    public function update($id){
        $data = [
            'name'=> $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'kommentar' => $this->input->post('kommentar'),
        ];
        $this->db->where('id', $id);
        $this->db->update('gaestebuch',$data); 
    }
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('gaestebuch');
    }
    public function search(){
        $keyword = $this->input->post('search');
        $this->db->like('id', $keyword);
        $this->db->or_like('name', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('kommentar', $keyword);
        $query = $this->db->get('gaestebuch');
        $data = $query->result_array();
        if($data != null)
            $this->span($data,$keyword);
        return $data;
    }
    public function orderBy($spalte,$order) {
        $this->db->order_by($spalte,$order);
        $query = $this->db->get('gaestebuch');
        return $query->result_array();
    }
    /**
     * hightlight the results
     * @param array $data
     * @param string $keyword
     */
    private function span(&$data, $keyword){
        foreach ($data as $key1 => $row) {
            foreach ($row as $key2 => $value) {
                $data[$key1][$key2] = str_ireplace($keyword,'<span style="background-color:#FFFF00;">'.$keyword.'</span>',$value);
            }
        }
    }
}
