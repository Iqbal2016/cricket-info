<?php

class Welcome_Model extends CI_Model {

    //put your code here
    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result =$query_result->result();
        return $result;
    }
    public function select_all_published_blog() {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by("blog_id","desc");
        $query_result = $this->db->get();
        $result =$query_result->result();
        return $result;
    }
    public function display_blog_details_by_blog_id($blog_id)
    {
    	$this->db->select('*');
    	$this->db->from('tbl_blog');
    	$this->db->where('blog_id', $blog_id);
    	$query_result = $this->db->get();
    	$result = $query_result->row();
    	return $result;
    	 
    }
    public function display_comments_by_blog_id($blog_id) {
    
    	$sql="SELECT b.blogger_name,c.comments FROM tbl_blogger as b,tbl_comments as c
    	WHERE c.blogger_id=b.blogger_id AND c.blog_id='$blog_id'";
    
    	$query_result = $this->db->query($sql);
    	$result = $query_result->result();
    	return $result;
    }

}

?>
