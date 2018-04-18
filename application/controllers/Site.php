<?php 
defined('BASEPATH') OR exit('No direct');

    class Site extends CI_Controller{
        public function index(){
            $this->load->view('template/public/headerin');
            $this->load->view('public/welcome');
            $this->load->view('template/public/footer');
        }
    }
?>