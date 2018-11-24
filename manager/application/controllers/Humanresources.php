<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Humanresources extends CI_Controller {

    public function index() {
        if ($this->isLogged()){
            $page = $this->getPage();
            $requests = $this->getRequest();
            $num = 0;
            foreach ($requests as $request) {
                $num++;
            }
            
            $pageid = array("page" => $page, "pagename" => "Gerenciamento de pessoas", "requests" => $requests, "nreq" => $num);
                        
            $this->load->view('template/super/menu', $pageid);
            $this->load->view('template/super/header', $pageid);
            $this->load->view('super/humanresources', $pageid);
            $this->load->view('template/footer');
        }else{
            redirect(base_url('login'));
        }
    }

    public function getPage() {
        $current = array("id" => 5, "page" => "user");
        return array("current" => $current);
    }
}
