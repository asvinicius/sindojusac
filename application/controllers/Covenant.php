<?php 
defined('BASEPATH') OR exit('No direct');

    class Covenant extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/covenant');
            $this->load->view('template/public/footer');
        }
    }
?>