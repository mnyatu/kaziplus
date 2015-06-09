<?php

class User extends CI_Model{
    
    public function list_users(){
        
        $this->db->select()->from('employee')->order_by('eid', 'desc');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function login($username = "", $password = ""){
        
        $this->db->select()->from('employee')->where(array('email' => $username, 'password' =>$password))->order_by('eid', 'desc');
        $query = $this->db->get();
        
        return $query->first_row('array');
    }

    public function user_details($user_id = 0){
        
        $this->db->select()->from('employee')->where(array('eid' => $user_id));
        $query = $this->db->get();
        
        return $query->first_row('array');
    }
    
    public function add_user($data = ""){
        
        if(is_array($data)){
            
            $this->db->insert('employee', $data);
            
            return $this->db->insert_id();
        }
    }
    
    public function update_user($user_id = 0, $data = ""){
        
        $this->db->where(array('eid' => $user_id));
        $this->db->update('employee', $data);
        
        return $this->db->affected_rows();
    }
    
    public function delete_user($user_id = 0){
        
        $this->db->where(array('eid' => $user_id));
        $this->db->delete('employee');
        
        return $this->db->affected_rows();
    }
}
