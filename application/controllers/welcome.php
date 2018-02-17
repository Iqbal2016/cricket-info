<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();       
        $this->load->model('welcome_model', 'w_model', true);
        $this->load->model('biography_admin_model', 'ba_model', true);
        $this->load->model('slide_admin_model','sl_model',TRUE);
    }

    public function index() {
        $data = array();
        $data['title'] = 'kick off';
        $data['all_slider'] = $this->sl_model->select_all__publication_slider_info(); 
        $data['all_blog'] = $this->w_model->select_all_published_blog();
        $data['maincontent'] = $this->load->view('home_content', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function slider_details($slide_id){
        $data = array();
        $data['title'] = 'dertils';
        $data['all_slider'] = $this->sl_model->select_all_slider_info();
        $data['slider_details'] = $this->sl_model->display_slider_details_by_slider_id($slide_id);
        $data['maincontent'] = $this->load->view('slider_details', $data, TRUE);
        $this->load->view('master', $data); 
    }

    public function services() {
        $data = array();
        $data['title'] = 'Services';
        $data['maincontent'] = $this->load->view('support_content', '', TRUE);
        $this->load->view('master', $data);
    }

    public function about() {
        $data = array();
        $data['title'] = 'About';
        $data['maincontent'] = $this->load->view('about_content', '', TRUE);
        $this->load->view('master', $data);
    }

    public function portfolio() {
        $data = array();
        $data['title'] = 'Portfolio';
        $data['all_slider'] = $this->sl_model->select_all_slider_info();
        $data['view_biography'] = $this->ba_model->select_view_biography_info();
        $data['maincontent'] = $this->load->view('portfolio_content', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function player_details($player_Id){
        $data = array();
        $data['title'] = 'Player Details';
        $data['all_slider'] = $this->sl_model->select_all_slider_info();
        $data['player_detail'] = $this->ba_model->select_player_detail_info($player_Id);
        $data['maincontent'] = $this->load->view('player_details', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function blog() {
        $data = array();
        $data['title'] = 'Blog';
        $data['all_slider'] = $this->sl_model->select_all_slider_info();
        $data['all_blog'] = $this->w_model->select_all_published_blog();
        $data['maincontent'] = $this->load->view('blog_content', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function blog_details($blog_id) {
        $data = array();
        $data['title'] = 'Blog by category';
        $data['all_slider'] = $this->sl_model->select_all_slider_info();
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['blog_details'] = $this->w_model->display_blog_details_by_blog_id($blog_id);
        $data['comments_by_blog_id'] = $this->w_model->display_comments_by_blog_id($blog_id);
        $data['maincontent'] = $this->load->view('blog_details', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function live_score(){
        $data = array();
        $data['title'] = 'Live score';
       // $data['all_category'] = $this->w_model->select_all_published_category();
        //$data['blog_details'] = $this->w_model->display_blog_details_by_blog_id($blog_id);
        //$data['comments_by_blog_id'] = $this->w_model->display_comments_by_blog_id($blog_id);
        $data['all_slider'] = $this->sl_model->select_all_slider_info();
        $data['maincontent'] = $this->load->view('live_score', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function viewers_login() {
        $data = array();
        $data['title'] = 'viewers login';
        //$data['all_category'] = $this->w_model->select_all_published_category();
        //$data['blog_details'] = $this->w_model->display_blog_details_by_blog_id($blog_id);
        $data['maincontent'] = $this->load->view('viewers_login', '', TRUE);
        $this->load->view('master', $data);
    }

    /*    public function viewers_register(){
      $data = array();
      $data['title'] = 'viewers login';
      //$data['all_category'] = $this->w_model->select_all_published_category();
      //$data['blog_details'] = $this->w_model->display_blog_details_by_blog_id($blog_id);
      $data['maincontent'] = $this->load->view('viewers_register', '', TRUE);
      $this->load->view('master', $data);
      } */

    public function contact() {
        $data = array();
        $data['title'] = 'Contact';
        $data['all_slider'] = $this->sl_model->select_all_slider_info();
        $data['maincontent'] = $this->load->view('contact_content', '', TRUE);
        $this->load->view('master', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */