<?php 
defined('BASEPATH') OR exit('No direct');

    class Ata extends CI_Controller{
        public function index(){
            if(1==0){
                $this->load->view('template/public/header');
                $this->load->view('public/ata');
                $this->load->view('template/public/footer');
            }else{
                redirect(base_url('main'));
            }
        }
    }
?>