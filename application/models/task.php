<?php

class Task extends CI_Model{
    
    public function list_tasks(){
        
        $this->db->select()->from('tasks')->order_by('tid', 'desc');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function task_details($task_id = 0){
        
        $this->db->select()->from('tasks')->where(array('tid' => $task_id));
        $query = $this->db->get();
        
        return $query->first_row('array');
    }
    
    public function add_task($data = ""){
        
        if(is_array($data)){
            
            $this->db->insert('tasks', $data);
            
            return $this->db->insert_id();
        }
    }
    
    public function update_task($task_id = 0, $data = ""){
        
        $this->db->where(array('tid' => $task_id));
        $this->db->update('tasks', $data);
        
        return $this->db->affected_rows();
    }
    
    public function delete_task($task_id = 0){
        
        $this->db->where(array('tid' => $task_id));
        $this->db->delete('tasks');
        
        return $this->db->affected_rows();
    }
}
