<?php 
defined('BASEPATH') OR exit('No direct');

    class Contact extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/contact');
            $this->load->view('template/public/footer');
        }
    }
?>