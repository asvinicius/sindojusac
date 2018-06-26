<?php 
defined('BASEPATH') OR exit('No direct');

    class History extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/history');
            $this->load->view('template/public/footer');
        }
    }
?>