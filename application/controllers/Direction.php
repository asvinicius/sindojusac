<?php 
defined('BASEPATH') OR exit('No direct');

    class Direction extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/direction');
            $this->load->view('template/public/footer');
        }
    }
?>