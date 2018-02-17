<?php

class Super_Admin_Model extends CI_Model {

    //put your code here
    public function save_category_info($data) {
        $this->db->insert('tbl_category', $data);
    }

    public function select_all_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_category_info_by_category_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

    public function select_category_info_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info($data, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function unpublished_category_info($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function published_category_info($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function save_blog_info($data) {
        $this->db->insert('tbl_blog', $data);
    }

    public function select_all_blog_info($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $query_result = $this->db->get('', $per_page, $offset);
        $result = $query_result->result();
        return $result;
    }

    public function delete_blog_info_by_blog_id($blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->delete('tbl_blog');
    }

    //select_blog_info_by_blog_id($blog_id)
    public function select_blog_info_by_blog_id($blog_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id', $blog_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_blog_info($data, $blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog', $data);
    }

    public function unpublished_blog_info($blog_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog');
    }

    public function published_blog_info($blog_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog');
    }

   
     public function save_admin_info($data){
        $this->db->insert('tbl_admin', $data);
    }
    
     public function select_all_admin_info() {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->order_by("admin_id","desc");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function select_admin_info($admin_id){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->order_by("admin_id","desc");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
}
