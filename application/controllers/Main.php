<?php 
defined('BASEPATH') OR exit('No direct');

    class Main extends CI_Controller{
        public function index(){
            if ($this->isLogged()){
                $this->load->view('template/user/header');
                $this->load->view('public/welcome');
                $this->load->view('template/public/footer');
            }else{
                $this->load->model('NewsModel');
                $this->load->model('PartnershipsModel');
                $news = new NewsModel();
                $partnerships = new PartnershipsModel();

                $notice = $news->listimportant();
                $partners = $partnerships->listing();
                $msg = array("news" => $notice, "partnerships" => $partners);
                
                $this->load->view('template/public/header');
                $this->load->view('public/welcome', $msg);
                $this->load->view('template/public/footer');
            }
        }
    }
?>