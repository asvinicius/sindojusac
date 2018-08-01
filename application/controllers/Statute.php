<?php 
defined('BASEPATH') OR exit('No direct');

    class Statute extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/statute');
            $this->load->view('template/public/footer');
        }
    }
?>