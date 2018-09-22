<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento a galeria");
            
            $this->load->model('GalleryModel');
            $gallery = new GalleryModel();
            
            $data = $gallery->listing();
            $msg = array("gallery" => $data);
            
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/gallery', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }
    
    public function changestatus($photoid = null) {
        if ($this->isLogged()){
            $this->load->model('GalleryModel');
            $gallery = new GalleryModel();
            
            $data = $gallery->search($photoid);
            
            if($data['status'] == 0){
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }
            
            if ($gallery->update($data)) {
                redirect(base_url('gallery'));
            }
        }else{
            redirect(base_url('login'));
        }
    }

    public function delete($photoid = null) {
        if ($this->isLogged()){
            $this->load->model('GalleryModel');
            $gallery = new GalleryModel();
            
            if ($gallery->delete($photoid)) {
                redirect(base_url('gallery'));
            }
            
        }else{
            redirect(base_url('login'));
        }
    }

    public function getPage() {
        $current = array("id" => 3, "page" => "user");
        return array("current" => $current);
    }
}
