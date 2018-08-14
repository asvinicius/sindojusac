<?php 
defined('BASEPATH') OR exit('No direct');

    class Welcome extends CI_Controller{
        public function index(){
            
            if ($this->isLogged()){
                if($this->isAdmsec()){
                    $this->load->view('template/super/header');
                    $this->load->view('public/welcome');
                    $this->load->view('template/public/footer');
                }else{
                    $this->load->view('template/user/header');
                    $this->load->view('public/welcome');
                    $this->load->view('template/public/footer');
                }
            }else{
                $this->load->view('template/public/header');
                $this->load->view('public/welcome');
                $this->load->view('template/public/footer');
            }
        }
    }
?>