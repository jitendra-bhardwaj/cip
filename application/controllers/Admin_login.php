<?php

class Admin_login extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->helper("html");
    }

    public function index(){
        $this->load->library('session');
        if($this->session->userdata('user_id')){
            redirect("admin/home");
        }
        
        $this->load->view("admin/login");
        
        
    }
    public function loginValidate(){
        
        $this->load->library('form_validation',null,'fv');
        
        $this->fv->set_rules('name',"Username",'trim|required|alpha');
        $this->fv->set_rules('password',"Password",'required');
        $this->fv->set_error_delimiters("<div class='error'>",
                '</div>');
        
        if($this->fv->run() ){
            $username = $this->input->post("name");
            $password = $this->input->post("password");
            
            $this->load->model("login_model");
            $login_id = $this->login_model->validate_login($username,$password);
            if($login_id){
                $this->load->library('session');
                $this->session->set_userdata('user_id',$login_id);
                return redirect('admin/home');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('login_error',"Invalid Username/Password");
                return redirect('admin');
            }
            
        }else{
            $this->load->view('admin/login');
        }
        
    }
}