<?php 
defined('BASEPATH') OR exit('No direct');

    class Welcome extends CI_Controller{
        public function index(){
            $this->load->view('public/loadpage');
        }
    }
?>