<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Viewnews extends CI_Controller {

    public function index($newsid=null) {
        if ($this->isLogged()){
            
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de notícias");
            
            $this->load->model('NewsModel');
            $this->load->model('CommentModel');
            $news = new NewsModel();
            $comment = new CommentModel();
            
            $detail = $news->search($newsid);
            $comments = $comment->listingall($newsid);
            
            $num = 0;
            foreach ($comments as $comment) {
                $num++;
            }
            
            $msg = array("detail" => $detail, "comments" => $comments, "num" => $num);
            
            $this->load->view('template/super/menu', $pageid);           
            $this->load->view('template/super/header', $pageid);           
            $this->load->view('super/viewnews', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function update() {
        if ($this->isLogged()){
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $data['newsid'] = $this->input->post('newsid');
            $data['type'] = $this->input->post('type');
            $data['date'] = $this->input->post('date');
            $data['main'] = $this->input->post('main');
            $data['internal'] = $this->input->post('internal');
            $data['thumb'] = $this->input->post('thumb');
            $data['title'] = $this->input->post('title');
            $data['abstract'] = $this->input->post('abstract');
            $data['content'] = $this->input->post('content');
            $data['status'] = $this->input->post('status');
            
            $config['upload_path'] = '../assets/img/news';
            $config['allowed_types'] = "jpg|png";
            $config['encrypt_name'] = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('mainup')){
                $imginfo = $this->upload->data();
                $data['main'] = $imginfo['file_name'];
            }
            if($this->upload->do_upload('thumbup')){
                $imginfo = $this->upload->data();
                $data['thumb'] = $imginfo['file_name'];
            }
            if($this->upload->do_upload('internalup')){
                $imginfo = $this->upload->data();
                $data['internal'] = $imginfo['file_name'];
            }
            
            if ($news->update($data)) {
                redirect(base_url('news'));
            }
            
        }else{
            redirect(base_url('login'));
        }
    }
    
    public function changecommentstatus($commentid=null) {
        if ($this->isLogged()){
            $this->load->model('CommentModel');
            $comment = new CommentModel();
            
            $data = $comment->search($commentid);
            
            if($data['status'] == 0){
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }
            
            if ($comment->update($data)) {
                redirect(base_url('viewnews/index/' . $data['news']));
            }
        }else{
            redirect(base_url('login'));
        }
    }

    public function deletecomment($commentid = null) {
        if ($this->isLogged()){
            $this->load->model('CommentModel');
            $comment = new CommentModel();
            
            $data = $comment->search($commentid);
            $news = $data['news'];
            
            if ($comment->delete($commentid)) {
                redirect(base_url('viewnews/index/' . $news));
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
