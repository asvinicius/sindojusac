<?php

defined('BASEPATH') OR exit('No direct');

class Contact extends CI_Controller {

    public function index() {
        $this->load->view('template/public/header');
        $this->load->view('public/contact');
        $this->load->view('template/public/footer');
    }

    public function sendmessage() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $sendmessage = array(
            "class" => "alert alert-success",
            "message" => $subject."Mensagem enviada. Agradecemos o seu contato.");

        $msg = array("sendmessage" => $sendmessage);

        $this->load->view('template/public/header');
        $this->load->view('public/contact', $msg);
        $this->load->view('template/public/footer');
    }

}

?>