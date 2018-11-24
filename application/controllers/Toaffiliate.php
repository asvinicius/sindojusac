<?php

defined('BASEPATH') OR exit('No direct');

class Toaffiliate extends CI_Controller {

    public function request() {
        $this->load->model('UserModel');
        $this->load->model('PhoneModel');
        $user = new UserModel();
        $phone = new PhoneModel();
        
        $this->load->library('email');
        
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $username = $this->input->post('username');
        
        if($this->input->post('password') != $this->input->post('ConfirmPassword')){
            return false;
        }
        
        $password = md5($this->input->get('password'));
        
        $this->email->from('sindojusac@gmail.com', 'SINDOJUS-AC');
        $this->email->to($email);
        $this->email->subject("Pedido de filiação");
        $this->email->message("Olá, ".$name.". \n"
                            . "Seu pedido de filiação foi recebido! \n"
                            . "Agora temos de seguir novos passos para concluir sua filiação ao SINDOJUS-AC: \n"
                            . "Imprima e preencha a ficha de filiação e de autorização de débito que está anexada à este e-mail; \n"
                            . "O próximo passo é entregar a ficha assinada (fisicamente) na sede do SINDOJUS-AC; \n"
                            . "Após a conclusão da sua filiação, um email será enviado lhe informando. A partir de então seu acesso à área de filiados do site do SINDOJUS-AC será liberada;"
                            . "Na área de filiados é possível encontrar modelos de documentos, informações sobre assembléias e transparência do SINDOJUS-AC;");
        $this->email->attach( './assets/arc/filiacaoedebito.pdf' );

        if($this->email->send()){
                        
            $data['userid'] = null;
            $data['name'] = $name;
            $data['email'] = $email;
            $data['username'] = $username;
            $data['password'] = $password;
            $data['role'] = 0;
            $data['status'] = 0;
            
            if($user->save($data)){
                $phoneaux = $user->lastinsert();
            }
            
            $dataphone['phoneid'] = null;
            $dataphone['userphone'] = $phoneaux['userid'];
            $dataphone['number'] = $number;
            
            if($phone->save($dataphone)){
                $sendmessage = array(
                    "class" => "alert alert-success",
                    "message" => "Um email foi enviado com instruções para concluir sua filiação, verifique sua caixa de entrada e lixo eletrônico!");
            }
            
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