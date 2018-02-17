<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Viewer_register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('viewer_model', 'v_model', true);
        $this->load->model('welcome_model', 'w_model', true);

        $blogger_id = $this->session->userdata('blogger_id');
        if ($blogger_id != NULL) {
            redirect('viewer_manager');
        }
    }

    public function index() {
        $data = array();
        $data['title'] = "Register";
        //$data['all_category'] = $this->w_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('viewer_register', '', true);
        $this->load->view('master', $data);
    }

    public function save_user() {
        $data = array();
        $data['blogger_name'] = $this->input->post('blogger_name', true);
        $data['blogger_email_address'] = $this->input->post('blogger_email_address', true);
        $data['blogger_password'] = $this->input->post('blogger_password', true);
        $data['blogger_password'] = md5($data['blogger_password']);
        $data['address'] = $this->input->post('address', true);
        $data['country'] = $this->input->post('country', true);
        
       /*  echo '<pre>';
        print_r($data);
        exit(); */
        
        $this->v_model->save_viewer_info($data);      
        $sdata = array();
        $sdata['registered'] = "Now You are registered, Please Log IN.";
        $this->session->set_userdata($sdata);
        redirect('viewer_manager');
    } 

}

?>
