<?php 
defined('BASEPATH') OR exit('No direct');

    class Shifts extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/shifts');
            $this->load->view('template/public/footer');
        }
    }
?>