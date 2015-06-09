<?php

class Tasks extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('task');
    }
    
    public function tasks(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        
        $this->load->view('footer_view');
    }
    
    public function altertasks(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        $data['tasks'] = $this->task->list_tasks();
        $this->load->view('alter_tasks', $data);
        $this->load->view('footer_view');
    }

    public function task($task_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        
        $this->load->view('footer_view');
    }
    
    public function addtask(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->model('task');
        $data['tasks'] = $this->task->list_tasks();
        
        if($_POST){
            
            $data = array(
                'eid' => $this->session->userdata('user_id'),
                'pid' => $_POST['pid'],
                'date_done' => $_POST['date_done'],
                'task' =>$_POST['task'],
                'time_taken' => $_POST['time_taken'],
                'comments' => $_POST['comments']
            );
            
            $this->task->add_task($data);
            
            redirect(base_url()."index.php/tasks/altertasks/");
            
        }
        
        $this->load->view('header_view');
        $this->load->view('add_task', $data);
        $this->load->view('footer_view');
        
    }
    
    public function updatetask($task_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        
        $this->load->view('footer_view');
    }
    
    public function deletetask($task_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->task-delete_task($task_id);
        redirect(base_url()."index.php/tasks/altertasks/");
    }
}