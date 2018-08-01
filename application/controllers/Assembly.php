<?php 
defined('BASEPATH') OR exit('No direct');

    class Assembly extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/assembly');
            $this->load->view('template/public/footer');
        }
    }
?>