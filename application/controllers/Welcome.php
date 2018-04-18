<?php 
defined('BASEPATH') OR exit('No direct');

    class Welcome extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
//            $this->load->view('public/welcome');
//            $this->load->view('template/public/footer');
        }
    }
?>