<?php

class MY_Controller extends CI_Controller{
    protected  $data = array();
    protected $template = array();
    protected $page = "";
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        
    }

    public function layout($page){
        $this->page = $page;
        $this->template['header'] = $this->load->view("template/header",$this->data,TRUE);
        $this->template['footer'] = $this->load->view("template/footer",$this->data,TRUE);
        $this->template['left'] = $this->load->view("template/left",$this->data,TRUE);
        
        if(!file_exists(APPPATH."views/".$this->page.".php")){
            show_404();
        }
        $this->template['page'] = $this->load->view($this->page,$this->data,TRUE);
        
        $this->load->view("template/main",$this->template);
    }
    public function admin_layout($page){
        if(!$this->session->userdata('user_id')){
            redirect("admin");
        }
        if($alertShow = $this->session->flashdata('nextPageAlert')){
            $this->showAlert($alertShow['alertMsg'], 
                    $alertShow['alertType'],
                    $alertShow['alertHead']);
        }
        $this->page = $page;
        $this->template['header'] = $this->load->view("admin_template/header",$this->data,TRUE);
        $this->template['footer'] = $this->load->view("admin_template/footer",$this->data,TRUE);
        $this->template['left'] = $this->load->view("admin_template/left",$this->data,TRUE);
        $this->template['alertPage'] = $this->load->view("admin_template/alerts",$this->data,TRUE);
        if(!file_exists(APPPATH."views/admin/".$this->page.".php")){
            show_404();
        }
        $this->template['page'] = $this->load->view("admin/".$this->page,$this->data,TRUE);
        
        
        $this->load->view("admin_template/main",$this->template);
    }
    
    public static $ALERT_SUCCESS = 1;
    public static $ALERT_ERROR = 2;
    public static $ALERT_WARNING = 3;
    public static $ALERT_INFO = 4;
    public function showAlert($alertMsg,$alertType = 4,$alertHead = null){
        $className = '';
        switch ($alertType){
            case self::$ALERT_SUCCESS:
                $className = 'w3-green';
                $header = "Success!";
                break;
            case self::$ALERT_ERROR:
                $className = 'w3-red';
                $header = "Error!";
                break;
            case self::$ALERT_WARNING:
                $className = 'w3-orange';
                $header = "Warning!";
                break;
            case self::$ALERT_INFO:
                $className = 'w3-blue';
                $header = "Info!";
                break;
            default:
                $className = 'w3-blue';
                $header = "Info!";
                break;
        }
        $alertHead = $alertHead !== null?$alertHead:$header;
        
        $this->data['alertActive'] = TRUE;
        $this->data['className'] = $className;
        $this->data['alertHead'] = $alertHead;
        $this->data['alertData'] = $alertMsg;
        
    }
    public function alertOnNextPage($alertMsg,$alertType = 4,$alertHead = null){
        
        $data = array(
            'alertMsg'=>$alertMsg,
            'alertType'=>$alertType,
            'alertHead'=>$alertHead,
            );
        
        $this->session->set_flashdata('nextPageAlert',$data);
    }
    
}

