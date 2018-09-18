<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de notícias");
            
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $data = $news->listing();
            $msg = array("news" => $data);
            
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/news', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }
    
    public function changestatus($newsid=null) {
        if ($this->isLogged()){
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $data = $news->search($newsid);
            
            if($data['status'] == 0){
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }
            
            if ($news->update($data)) {
                redirect(base_url('viewnews/index/' . $data['newsid']));
            }
        }else{
            redirect(base_url('login'));
        }
    }

    public function delete($newsid = null) {
        if ($this->isLogged()){
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            if ($news->delete($newsid)) {
                redirect(base_url('news'));
            }
            
        }else{
            redirect(base_url('login'));
        }
    }

    public function getPage() {
        $current = array("id" => 1, "page" => "user");
        return array("current" => $current);
    }
}
