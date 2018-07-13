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
                    "class" => "alert alert-error",
                    "message" => "Sinto muito!<br />Você não pode acessar o sistema neste momento.",
                    "role" => 1);
                $msg = array("loginfail" => $loginfail);
            
            $this->load->view('template/public/header');
            $this->load->view('public/loginfailadm', $msg);
            $this->load->view('template/public/footer');
            }
        } else {
            $loginfail = array(
                "class" => "alert alert-error",
                "message" => "Usuário ou senha incorretos!",
                "role" => 1);
            
            $msg = array("loginfail" => $loginfail);
            
            $this->load->view('template/public/header');
            $this->load->view('public/loginfailadm', $msg);
            $this->load->view('template/public/footer');
        }
    }

    public function signin() {
        
    }

    public function signout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
?>