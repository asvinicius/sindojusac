<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editpartnership extends CI_Controller {

    public function index($partnershipsid=null) {
        if ($this->isLogged()){
            $this->load->model('PartnershipsModel');
            $partnerships = new PartnershipsModel();
            
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de notícias");
            
            $detail = $partnerships->search($partnershipsid);
            $msg = array("partnership" => $detail);
            
            $this->load->view('template/super/menu', $pageid);  
            $this->load->view('template/super/header', $pageid);  
            $this->load->view('super/editpartnership', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function update() {
        if ($this->isLogged()){
            $this->load->model('PartnershipsModel');
            $partnerships = new PartnershipsModel();
            
            $data['partnershipsid'] = $this->input->post('partnershipsid');
            $data['partnername'] = $this->input->post('partnername');
            $data['partnerdescription'] = $this->input->post('partnerdescription');
            $data['partnermain'] = $this->input->post('partnermain');
            $data['partnermini'] = $this->input->post('partnermini');
            $data['signaturedate'] = $this->input->post('signaturedate');
            $data['status'] = $this->input->post('status');
            
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
            
            if ($partnerships->update($data)) {
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
