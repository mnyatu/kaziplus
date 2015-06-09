<?php

class Projects extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('project');
    }
    
    public function projects(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        
        $this->load->view('footer_view');
    }
    
    public function alterprojects(){
       
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        $data['projects'] = $this->project->list_projects();
        $this->load->view('alter_projects', $data);
        $this->load->view('footer_view');
    }

    public function viewproject($project_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
    }
    
    public function addproject(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        if($_POST){
            
            $data = array(
                'project_name' => $_POST['project_name'],
                'start_date' => $_POST['start_date'],
                'end_date' => $_POST['end_date']
            );
            
            $this->project->add_project($data);
            redirect(base_url()."index.php/projects/alterprojects/");
        }
        
        $this->load->view('header_view');
        $this->load->view('add_project');
        $this->load->view('footer_view');
    }
    
    public function updateproject($project_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        
        $this->load->view('footer_view');
    }
    
    public function deleteproject($project_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->project-delete_project($project_id);
        redirect(base_url()."index.php/projects/alterprojects/");
    }
}