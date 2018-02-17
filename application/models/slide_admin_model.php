<?php


class Slide_admin_model  extends CI_Model{
    
    public function save_slide_info($data){
          $this->db->insert('tbl_slide', $data);
    }
    public function select_all_slider_info(){
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all__publication_slider_info(){
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_blog_info_by_slider_id($slide_id){
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $this->db->where('slide_id', $slide_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result; 
    }
    public function update_slider_info($data, $slide_id){
        $this->db->where('slide_id', $slide_id);
        $this->db->update('tbl_slide', $data);
    }
    public function unpublished_slider_info($slide_id){
        $this->db->set('publication_status', 0);
        $this->db->where('slide_id', $slide_id);
        $this->db->update('tbl_slide');
    }
    public function published_slider_info($slide_id){
        $this->db->set('publication_status', 1);
        $this->db->where('slide_id', $slide_id);
        $this->db->update('tbl_slide');
    }

    public function delete_slider_info_by_slider_id($slide_id){
        $this->db->where('slide_id', $slide_id);
        $this->db->delete('tbl_slide');
    }
    
    public function display_slider_details_by_slider_id($slide_id){
        $this->db->select('*');
    	$this->db->from('tbl_slide');
    	$this->db->where('slide_id', $slide_id);
    	$query_result = $this->db->get();
    	$result = $query_result->row();
    	return $result;
    }
}
