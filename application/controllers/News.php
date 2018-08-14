<?php 
defined('BASEPATH') OR exit('No direct');

    class News extends CI_Controller{
        public function index(){
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $data = $news->listing();
            $msg = array("news" => $data);
            
            $this->load->view('template/public/header');
            $this->load->view('public/news', $msg);
            $this->load->view('template/public/newsmenu', $msg);
            $this->load->view('template/public/footer');
        }
        public function detail($newsid = null) {
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $detail = $news->search($newsid);
            $data = $news->listing();
            
            $msg = array("news" => $data, "detail" => $detail);
            
            $this->load->view('template/public/header');
            if($newsid == 1){
                $this->load->view('public/fundacao', $msg);
            }
            if($newsid == 2){
                $this->load->view('public/fojebrapf', $msg);
            }
            if($newsid == 3){
                $this->load->view('public/assfojebrabsb', $msg);
            }
            
            // $this->load->view('public/newsdetail', $msg);
            $this->load->view('template/public/newsmenu', $msg);
            $this->load->view('template/public/footer');
        }
    }
?>