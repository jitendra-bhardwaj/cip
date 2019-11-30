<?php
class Admin_model extends CI_Model{
   
    public function insertPost($data){
        $this->db->insert('posts',$data);
    }
    public function showPost(){
         return $this->db->get('posts');
    }
    
    public function getPost($id){
        return $this->db->where(['id'=>$id])
                    ->from('posts')
                    ->get();
    }
    public function deletePost($id){
        $this->db->delete('posts',['id'=>$id]);
        return TRUE;
    }
}