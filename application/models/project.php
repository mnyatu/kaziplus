<?php

class Project extends CI_Model{
    
    public function list_projects(){
        
        $this->db->select()->from('projects')->order_by('pid', 'desc');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function project_details($project_id = 0){
        
        $this->db->select()->from('projects')->where(array('pid' => $project_id));
        $query = $this->db->get();
        
        return $query->first_row('array');
    }
    
    public function add_project($data = ""){
        
        if(is_array($data)){
            
            $this->db->insert('projects', $data);
            
            return $this->db->insert_id();
        }
    }
    
    public function update_project($project_id = 0, $data = ""){
        
        $this->db->where(array('pid' => $project_id));
        $this->db->update('projects', $data);
        
        return $this->db->affected_rows();
    }
    
    public function delete_project($project_id = 0){
        
        $this->db->where(array('pid' => $project_id));
        $this->db->delete('projects');
        
        return $this->db->affected_rows();
    }
}
