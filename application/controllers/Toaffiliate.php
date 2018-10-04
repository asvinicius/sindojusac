<?php

defined('BASEPATH') OR exit('No direct');

class Toaffiliate extends CI_Controller {

    public function index() {
        
        $this->load->library('email');
        
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        
        $this->email->from($email, $name);
        $this->email->to('sindojusac@outlook.com');
        $this->email->subject($subject);
        $this->email->message($message);
//        $email->AddAttachment( '../assets/arc', 'filiacaoedebito.pdf' );

        if($this->email->send()){
            $sendmessage = array(
                "class" => "alert alert-success",
                "message" => "Mensagem enviada. Agradecemos o seu contato.");
        }else{
            $sendmessage = array(
                "class" => "alert alert-danger",
                "message" => "Não foi possível enviar sua mensagem");
        }

        $msg = array("sendmessage" => $sendmessage);

        $this->load->view('template/public/header');
        $this->load->view('public/contact', $msg);
        $this->load->view('template/public/footer');
    }

}

?>