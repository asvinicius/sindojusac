<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Partnerships extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de parcerias e convênios");
            
            $this->load->model('PartnershipsModel');
            $partnerships = new PartnershipsModel();
            
            $data = $partnerships->listing();
            $msg = array("partnerships" => $data);
            
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/partnerships', $msg);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }
    
    public function changestatus($partnershipsid = null) {
        if ($this->isLogged()){
            $this->load->model('PartnershipsModel');
            $partnerships = new PartnershipsModel();
            
            $data = $partnerships->search($partnershipsid);
            
            if($data['status'] == 0){
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }
            
            if ($partnerships->update($data)) {
                redirect(base_url('partnerships'));
            }
        }else{
            redirect(base_url('login'));
        }
    }

    public function delete($partnershipsid = null) {
        if ($this->isLogged()){
            $this->load->model('PartnershipsModel');
            $partnerships = new PartnershipsModel();
            
            if ($partnerships->delete($partnershipsid)) {
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
