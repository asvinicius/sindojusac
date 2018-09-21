<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Several extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de páginas");
                        
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/several');
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function getPage() {
        $current = array("id" => 3, "page" => "user");
        return array("current" => $current);
    }
}
