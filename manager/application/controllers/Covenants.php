<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Covenants extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de parcerias e convênios");
            
            $this->load->model('CovenantsModel');
            $covenants = new CovenantsModel();
            
            $data = $covenants->listing();
            $msg = array("covenants" => $data);
            
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/covenants', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }
    
    public function changestatus($covenantsid = null) {
        if ($this->isLogged()){
            $this->load->model('CovenantsModel');
            $covenants = new CovenantsModel();
            
            $data = $covenants->search($covenantsid);
            
            if($data['status'] == 0){
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }
            
            if ($covenants->update($data)) {
                redirect(base_url('covenants'));
            }
        }else{
            redirect(base_url('login'));
        }
    }

    public function delete($covenantsid = null) {
        if ($this->isLogged()){
            $this->load->model('CovenantsModel');
            $covenants = new CovenantsModel();
            
            if ($covenants->delete($covenantsid)) {
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
