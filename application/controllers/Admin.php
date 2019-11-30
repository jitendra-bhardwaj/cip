<?php

class Admin extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper("form");
    }

    public function home(){
        $this->load->model('admin_model');
        
        $postData = $this->admin_model->showPost();
        $this->data['posts']= $postData;
        $this->load->helper('text');
        $this->admin_layout("home");
    }
    public function contact(){
        $this->admin_layout("contact");
    }
    public function aboutme(){
        $this->admin_layout("aboutme");
    }
    public function logout(){
        $this->session->unset_userdata('user_id');
        return redirect('admin');
    }
}