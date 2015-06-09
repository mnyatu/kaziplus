<?php

class Users extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user');
    }
    
    public function index(){
        
        if($this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/viewusers/");
        }
        
        $this->load->view('login');
                
    }

    public function login(){
        
        if($_POST){
            
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            
            $user = $this->user->login($username, $password);
            var_dump($user);
            if(!$user){
                
                $data['error'] = 1;
            } else {
                
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('user_id', $user['eid']);
                
                redirect(base_url()."index.php/users/viewusers/");
            }
        } 
        
        //$this->load->view('login', $data);
    }

    public function logout(){
        
        $this->session->sess_destroy();
        redirect(base_url()."index.php/users/");
    }

    public function viewusers(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        
        $this->load->view('header_view');
        
        $this->load->view('footer_view');
    }
    
    public function alterusers(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        $data['users'] = $this->user->list_users();
        $this->load->view('alter_users', $data);
        $this->load->view('footer_view');
    }

    public function user($user_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->load->view('header_view');
        
        $this->load->view('footer_view');
    }
    
    public function adduser(){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        if($_POST){
            
            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'password' => sha1($_POST['password'])
            );

            $this->user->add_user($data);
            redirect(base_url()."index.php/users/alterusers/");
            
        } 
        
        $this->load->view('header_view');
        $this->load->view('add_user');
        $this->load->view('footer_view');
        
    }
    
    public function updateuser($user_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
    }
    
    public function deleteuser($user_id){
        
        if(!$this->session->userdata('user_id')){
            redirect(base_url()."index.php/users/");
        }
        
        $this->user->delete_user($user_id);
        redirect(base_url()."index.php/users/alterusers/");
    }
}