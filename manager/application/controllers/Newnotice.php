<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newnotice extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de notícias");
            
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/newnotice');
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function save() {
        if ($this->isLogged()){
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $data['newsid'] = null;
            $data['type'] = $this->input->post('type');
            $data['title'] = $this->input->post('title');
            $data['slug'] = $this->getSlug($data['title']);
            $data['abstract'] = $this->input->post('abstract');
            $data['content'] = $this->input->post('content');
            
            $config['upload_path'] = '../assets/img/news';
            $config['allowed_types'] = "jpg|png";
            $config['encrypt_name'] = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('main')){
                $imginfo = $this->upload->data();
                $data['main'] = $imginfo['file_name'];
            }
            if($this->upload->do_upload('thumb')){
                $imginfo = $this->upload->data();
                $data['thumb'] = $imginfo['file_name'];
            }
            if($this->upload->do_upload('internal')){
                $imginfo = $this->upload->data();
                $data['internal'] = $imginfo['file_name'];
            }
            
            $data['date'] = date("Y-m-d H:i");
            
            if ($news->save($data)) {
                redirect(base_url('news'));
            }
            
        }else{
            redirect(base_url('login'));
        }
    }
    
    public function getSlug($title) {
        $slug = mb_strtolower($title);
        $what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','ñ','ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
        $by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','n','c','-','-','-','-','-','-','-','-','-','-','-','-','-','e','-','-','-','-','-','-','-','-','-' );
        return str_replace($what, $by, $slug);
    }

    public function getPage() {
        $current = array("id" => 1, "page" => "user");
        return array("current" => $current);
    }
    

}
