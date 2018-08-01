<?php 
defined('BASEPATH') OR exit('No direct');

    class Legislation extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/legislation');
            $this->load->view('template/public/footer');
        }
    }
?>