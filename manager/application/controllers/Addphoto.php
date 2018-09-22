<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Addphoto extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de galeria");
            
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/addphoto');
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function save() {
        if ($this->isLogged()){
            $this->load->model('GalleryModel');
            $gallery = new GalleryModel();
            
            $data['photoid'] = null;
            $data['phototitle'] = $this->input->post('phototitle');
            $data['photodate'] = $this->input->post('photodate');
            $data['status'] = 0;
            
            $config['upload_path'] = '../assets/img/gallery';
            $config['allowed_types'] = "jpg|png";
            $config['encrypt_name'] = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('photoaddress')){
                $imginfo = $this->upload->data();
                $data['photoaddress'] = $imginfo['file_name'];
            }
            
            
            if ($gallery->save($data)) {
                redirect(base_url('gallery'));
            }
            
        }else{
            redirect(base_url('login'));
        }
    }

    public function getPage() {
        $current = array("id" => 2, "page" => "user");
        return array("current" => $current);
    }
    

}
