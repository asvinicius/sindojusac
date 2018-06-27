<?php

defined('BASEPATH') OR exit('No direct');

class Login extends CI_Controller {

    public function superin() {
        $loginfail = null;

        $this->load->model("LoginModel");
        $username = $this->input->get("username");
        $password = md5($this->input->get("password"));
        $user = $this->LoginModel->search($username, $password);
        
        if ($user) {
            if ($user['status'] == '1') {
                $session = array(
                    'userid' => $user["userid"],
                    'username' => $user["username"],
                    'email' => $user["email"],
                    'phone' => $user["phone"],
                    'name' => $user["name"],
                    'role' => $user["role"],
                    'loggedin' => TRUE
                );
                $this->session->set_userdata($session);
                redirect(base_url());
            } else {
                $loginfail = array(
                    "class" => "danger",
                    "message" => "Sinto muito!<br />Você não pode acessar o sistema neste momento.");
                $msg = array("loginfail" => $loginfail);
            }
        } else {
            $loginfail = array(
                "class" => "danger",
                "message" => "Usuário ou senha incorretos");
            
            $msg = array("loginfail" => $loginfail);
        }
    }

    public function signin() {
        
    }

    public function signout() {
        
    }

}

?>