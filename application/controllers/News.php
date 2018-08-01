<?php 
defined('BASEPATH') OR exit('No direct');

    class News extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/news');
            $this->load->view('template/public/footer');
        }
    }
?>