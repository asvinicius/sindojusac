<?php 
defined('BASEPATH') OR exit('No direct');

    class Models extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/models');
            $this->load->view('template/public/footer');
        }
    }
?>