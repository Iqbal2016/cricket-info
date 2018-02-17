<?php

class Biography_admin_model extends CI_Model{

public function save_biography_info($data){
	
	$this->db->insert('tbl_player', $data);
}

public function select_all_biography_info(){
	$this->db->select('*');
	$this->db->from('tbl_player');
        $this->db->order_by("player_Id","desc");
	$query_result = $this->db->get();
	$result = $query_result->result();
	return $result;
}
public function select_view_biography_info(){
        $this->db->select('*');
	$this->db->from('tbl_player');
        $this->db->order_by("player_Id","desc");
	$query_result = $this->db->get();
	$result = $query_result->result();
	return $result;
}
public function select_player_detail_info($player_Id){       
        $this->db->select('*');
    	$this->db->from('tbl_player');
    	$this->db->where('player_Id', $player_Id);
    	$query_result = $this->db->get();
    	$result = $query_result->row();
    	return $result;
}

public function unpublished_biography_info($player_Id){
	$this->db->set('publication_status', 0);
	$this->db->where('player_Id', $player_Id);
	$this->db->update('tbl_player');
}
public function published_biography_info($player_Id){
	$this->db->set('publication_status', 1);
	$this->db->where('player_Id', $player_Id);
	$this->db->update('tbl_player');
}
public function delete_biography_info_by_player_id($player_Id){
	$this->db->where('player_Id', $player_Id);
	$this->db->delete('tbl_player');
}
public function select_biography_info_by_player_id($player_Id){
	$this->db->select('*');
	$this->db->from('tbl_player');
	$this->db->where('player_Id', $player_Id);
	$query_result = $this->db->get();
	$result = $query_result->row();
	return $result;
}
public function update_biography_info($data, $player_Id){
	$this->db->where('player_Id', $player_Id);
	$this->db->update('tbl_player', $data);
}

}