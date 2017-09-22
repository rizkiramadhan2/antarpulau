<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
{
    parent::__construct();
    $this->load->model('Model');
  
}

    public function index(){
        $this->load->view('login');
    }

    public function login(){$result;
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];

        $result = $this->Model->read('accounts', $data);

        if(empty($result)){
            echo "fail";
        } else {
            echo "success";
        }
    }
}