<?php 
defined('BASEPATH') OR exit('No direct');

    class Gallery extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/gallery');
            $this->load->view('template/public/footer');
        }
    }
?>