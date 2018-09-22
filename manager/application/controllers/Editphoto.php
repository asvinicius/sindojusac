<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editphoto extends CI_Controller {

    public function index($photoid=null) {
        if ($this->isLogged()){
            $this->load->model('GalleryModel');
            $gallery = new GalleryModel();
            
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de galeria");
            
            $detail = $gallery->search($photoid);
            $msg = array("photo" => $detail);
            
            $this->load->view('template/super/menu', $pageid);  
            $this->load->view('template/super/header', $pageid);  
            $this->load->view('super/editphoto', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function update() {
        if ($this->isLogged()){
            $this->load->model('GalleryModel');
            $gallery = new GalleryModel();
            
            $data['photoid'] = $this->input->post('photoid');
            $data['phototitle'] = $this->input->post('phototitle');
            $data['photodate'] = $this->input->post('photodate');
            $data['photoaddress'] = $this->input->post('photoaddress');
            $data['status'] = $this->input->post('status');
            
            $config['upload_path'] = '../assets/img/gallery';
            $config['allowed_types'] = "jpg|png";
            $config['encrypt_name'] = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('photoaddress')){
                $imginfo = $this->upload->data();
                $data['photoaddress'] = $imginfo['file_name'];
            }
            
            if ($gallery->update($data)) {
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
