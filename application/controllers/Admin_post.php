<?php

class Admin_post extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
    }
    public function createPost(){
        $this->admin_layout("createPost");
    }
    public function savePost(){
        $filename = time();
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|png|jpg|jpeg',
            'file_name' => $filename,
        );
        
        $this->load->library('upload',$config);
        $this->load->library('form_validation',null,'fv');
        $this->fv->set_rules('heading',"Heading","trim|required");
        $this->fv->set_rules('post',"Post","required");
        
        $this->fv->set_error_delimiters("<div class='w3-text-red'>",'</div>');
        
        if($this->fv->run() && $this->upload->do_upload('imageUpload')){
            $filename =  $this->upload->data('file_name');
            
            $heading = $this->input->post('heading');
            $post = $this->input->post('post');
            $data = array('heading'=>$heading,'post'=>$post,'imagepath'=>$filename);
            $this->load->model('admin_model');
            $this->admin_model->insertPost($data);
            
            $this->alertOnNextPage('Post Created', self::$ALERT_SUCCESS);
            return redirect('admin/home');
            
        }else{
            $this->data['uploadErr'] =  $this->upload->display_errors("<div class='w3-text-red'>","</div>");
            $this->admin_layout("createPost");
        }
        
        $configvalid = array();
    }
    
    public function changePost($id){
        $this->load->model('admin_model');
        $this->data['post'] = $this->admin_model->getPost($id)->row();
        $this->admin_layout("createPost");
    }
    public function deletePost($id){
        $this->load->model('admin_model');
        $this->data['post'] = $this->admin_model->deletePost($id);
        $this->alertOnNextPage('Post Deleted', self::$ALERT_SUCCESS);
        return redirect('admin/home');
    }
}