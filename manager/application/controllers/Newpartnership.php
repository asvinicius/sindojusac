<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newpartnership extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de parcerias e convênios");
            
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/newpartnership');
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function save() {
        if ($this->isLogged()){
            $this->load->model('PartnershipsModel');
            $partnerships = new PartnershipsModel();
            
            $data['partnershipsid'] = null;
            $data['partnername'] = $this->input->post('partnername');
            $data['partnerdescription'] = $this->input->post('partnerdescription');
            $data['signaturedate'] = date("Y-m-d H:i");
            $data['status'] = 0;
            
            $config['upload_path'] = '../assets/img/partnerships';
            $config['allowed_types'] = "jpg|png";
            $config['encrypt_name'] = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('partnermain')){
                $imginfo = $this->upload->data();
                $data['partnermain'] = $imginfo['file_name'];
            }
            if($this->upload->do_upload('partnermini')){
                $imginfo = $this->upload->data();
                $data['partnermini'] = $imginfo['file_name'];
            }
            
            
            if ($partnerships->save($data)) {
                redirect(base_url('partnerships'));
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
