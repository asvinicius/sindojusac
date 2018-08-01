<?php 
defined('BASEPATH') OR exit('No direct');

    class Ata extends CI_Controller{
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('public/ata');
            $this->load->view('template/public/footer');
        }
    }
?>