<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relations extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de parcerias e convênios");
                        
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/relations');
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function getPage() {
        $current = array("id" => 2, "page" => "user");
        return array("current" => $current);
    }
}
