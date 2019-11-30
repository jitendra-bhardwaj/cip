<?php
class Login_model extends CI_Model{
    
    public function validate_login($username,$password){
         $password = md5($password);
        $q = $this->db->where(['uname'=>$username,'password'=>$password])
                        ->from('adminLogin')
                        ->get();
        if($q->num_rows()){
            return $q->row()->ID;
        }else{
            return FALSE;
        }
    }
}