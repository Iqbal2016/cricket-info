<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biography_Admin  extends CI_Controller{
	
 //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('biography_admin_model', 'ba_model', true);
       // $this->load->model('super_admin_model', 'sa_model', true);
        //$this->load->model('welcome_model', 'w_model', TRUE);
        $admin_id = $this->session->userdata('admin_id');
        //echo '-----'.$admin_id;
        if ($admin_id == null) {
            redirect('admin_login', 'refresh');
        }
    }
	
	public function add_biography(){
		$data=array();
		$data['adminmaincontent']=  $this->load->view('admin/add_biography','',TRUE);
		$this->load->view('admin/admin_master', $data);
	}
	
	public function save_biography(){
		$data = array();
		
		/* -----------Upload start--------------- */
		
		$config ['upload_path'] = 'images/player_Image/';
		$config ['allowed_types'] = 'gif|jpg|png';
		$config ['max_size'] = '10000';
		$config ['max_width'] = '1024';
		$config ['max_height'] = '768';
		$error = array();
		$fdata = array();
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('player_Image')) {
			$error = $this->upload->display_errors();
// 			echo '<pre>';
// 			print_r($error);
// 			exit();
		} else {
			$fdata = $this->upload->data();
			
// 			 echo '<pre>';
// 			 print_r($fdata);
// 			 exit();
			 
			$data ['player_Image'] = base_url() . $config ['upload_path'] . $fdata ['file_name'];
			// echo $data['product_image'];
		}
		/* -----------Upload End--------------- */
		
		$data['player_Name'] = $this->input->post('player_Name', true);
		$data['player_Country'] = $this->input->post('player_Country', true);
		$data['player_Description'] = $this->input->post('player_Description', true);
		$data['player_Weight'] = $this->input->post('player_Weight', true);
		$data['player_Height'] = $this->input->post('player_Height', true);
		$data['player_Age'] = $this->input->post('player_Age', true);
		//$data['player_Image'] = $this->input->post('player_Image', true);
		$data['player_Position'] = $this->input->post('player_Position', true);
		$data['publication_status'] = $this->input->post('publication_status', true);
		$this->ba_model->save_biography_info($data);
		$sdata = array();
		$sdata['message'] = 'Save Baiography Successfully !';
		$this->session->set_userdata($sdata);
		redirect('biography_admin/add_biography');
	}
	
	public  function all_biography(){
		$data = array();
		$data['all_biography'] = $this->ba_model->select_all_biography_info();                
		$data['adminmaincontent'] = $this->load->view('admin/view_biography', $data, TRUE);
		$this->load->view('admin/admin_master', $data);
	}
	
	public function unpublished_biography($player_Id){
		$this->ba_model->unpublished_biography_info($player_Id);
		redirect("biography_admin/all_biography");
	
	}
	public function published_biography($player_Id){
		$this->ba_model->published_biography_info($player_Id);
		redirect("biography_admin/all_biography");
	}
	public function delete_biography($player_Id){
		$this->ba_model->delete_biography_info_by_player_id($player_Id);
		redirect('biography_admin/all_biography');
	}
	public function edit_biography($player_Id){
		$data = array();
		$data['biography_info'] = $this->ba_model->select_biography_info_by_player_id($player_Id);
		$data['adminmaincontent'] = $this->load->view('admin/edite_biography_form', $data, TRUE);
		$this->load->view('admin/admin_master', $data);
	}
	public function update_biography($player_Id){
		$data = array();
		$player_Id = $this->input->post('player_Id', true);
		/* -----------Upload start--------------- */
		
		$config ['upload_path'] = 'images/player_Image/';
		$config ['allowed_types'] = 'gif|jpg|png';
		$config ['max_size'] = '10000';
		$config ['max_width'] = '1024';
		$config ['max_height'] = '768';
		$error = array();
		$fdata = array();
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('player_Image')) {
			$error = $this->upload->display_errors();
			// 			echo '<pre>';
			// 			print_r($error);
			// 			exit();
		} else {
			$fdata = $this->upload->data();
				
			// 			 echo '<pre>';
			// 			 print_r($fdata);
			// 			 exit();
		
			$data ['player_Image'] = base_url() . $config ['upload_path'] . $fdata ['file_name'];
			// echo $data['product_image'];
		}
		/* -----------Upload End--------------- */
		
		$data['player_Name'] = $this->input->post('player_Name', true);
		$data['player_Country'] = $this->input->post('player_Country', true);
		$data['player_Description'] = $this->input->post('player_Description', true);
		$data['player_Weight'] = $this->input->post('player_Weight', true);
		$data['player_Height'] = $this->input->post('player_Height', true);
		$data['player_Age'] = $this->input->post('player_Age', true);
		//$data['player_Image'] = $this->input->post('player_Image', true);
		$data['player_Position'] = $this->input->post('player_Position', true);
		$data['publication_status'] = $this->input->post('publication_status', true);
		$this->ba_model->update_biography_info($data, $player_Id);
		$sdata = array();
		$sdata['message'] = 'Update Baiography Successfully !';
		$this->session->set_userdata($sdata);
		redirect('biography_admin/all_biography/' .$player_Id);
	}

}