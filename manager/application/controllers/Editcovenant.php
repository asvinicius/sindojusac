<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Editcovenant extends CI_Controller {

    public function index($covenantsid=null) {
        if ($this->isLogged()){
            
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de notícias");
            
            $this->load->model('CovenantsModel');
            $covenants = new CovenantsModel();
            
            $data = $covenants->search($covenantsid);
            
            $msg = array("covenant" => $data);
            
            $this->load->view('template/super/menu', $pageid);  
            $this->load->view('template/super/header', $pageid);  
            $this->load->view('super/editcovenant', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function update() {
        if ($this->isLogged()){
            $this->load->model('CovenantsModel');
            $covenants = new CovenantsModel();
            
            $data['covenantsid'] = $this->input->post('covenantsid');
            $data['company'] = $this->input->post('company');
            $data['covenantdescription'] = $this->input->post('covenantdescription');
            $data['covenantmain'] = $this->input->post('covenantmain');
            $data['covenantmini'] = $this->input->post('covenantmini');
            $data['signaturedate'] = $this->input->post('signaturedate');
            $data['status'] = $this->input->post('status');
            
            $config['upload_path'] = '../assets/img/covenants';
            $config['allowed_types'] = "jpg|png";
            $config['encrypt_name'] = true;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('covenantmain')){
                $imginfo = $this->upload->data();
                $data['covenantmain'] = $imginfo['file_name'];
            }
            if($this->upload->do_upload('covenantmini')){
                $imginfo = $this->upload->data();
                $data['covenantmini'] = $imginfo['file_name'];
            }
            
            if ($covenants->update($data)) {
                redirect(base_url('covenants'));
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
