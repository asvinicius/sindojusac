<?php 
defined('BASEPATH') OR exit('No direct');

    class News extends CI_Controller{
        public function index(){
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $data = $news->listing();
            $important = $news->listimportant();
            $msg = array("news" => $data, "important" => $important);
            
            $this->load->view('template/public/header');
            $this->load->view('public/news', $msg);
            $this->load->view('template/public/newsmenu', $msg);
            $this->load->view('template/public/footer');
        }
        public function detail($newsid = null) {
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $detail = $news->search($newsid);
            $important = $news->listimportant();
            
            $msg = array("important" => $important, "detail" => $detail);
            
            $this->load->view('template/public/header');            
            $this->load->view('public/newsdetail', $msg);
            $this->load->view('template/public/newsmenu', $msg);
            $this->load->view('template/public/footer');
        }
    }
?>