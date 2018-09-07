<?php 
defined('BASEPATH') OR exit('No direct');

    class News extends CI_Controller{
        public function index(){
            $this->load->model('NewsModel');
            $news = new NewsModel();
            
            $data = $news->listing();
            $important = $news->listimportant();
            $msg = array("news" => $data, "important" => $important);
            
            $this->load->view('template/public/header');
            $this->load->view('public/news', $msg);
            $this->load->view('template/public/newsmenu', $msg);
            $this->load->view('template/public/footer');
        }
        
        public function detail($newsid = null) {
            $this->load->model('NewsModel');
            $this->load->model('CommentModel');
            $news = new NewsModel();
            $comment = new CommentModel();
            
            $detail = $news->search($newsid);
            $comments = $comment->listing($newsid);
            
            $num = 0;
            foreach ($comments as $comment) {
                $num++;
            }
            
            $important = $news->listimportant();
            
            $msg = array("important" => $important, "detail" => $detail, "comments" => $comments, "num" => $num);
            
            $this->load->view('template/public/header');            
            $this->load->view('public/newsdetail', $msg);
            $this->load->view('template/public/newsmenu', $msg);
            $this->load->view('template/public/footer');
        }
        
        public function sendcomment() {
            $this->load->model('NewsModel');
            $this->load->model('CommentModel');
            $news = new NewsModel();
            $comment = new CommentModel();
        
            $this->load->library('email');

            $commentnews = $this->input->post('news');
            $author = $this->input->post('name');
            $emailauthor = $this->input->post('email');
            $message = $this->input->post('comment');

            $this->email->from('sindojusac@gmail.com', 'SINDOJUS-AC');
            $this->email->to($emailauthor);
            $this->email->subject('Agradecemos seu comentário');
            $this->email->message('O Sindicato dos Oficiais de Justiça do Acre agradece seu comentário.');
            
            $data['commentid'] = null;
            $data['news'] = $commentnews;
            $data['author'] = $author;
            $data['emailauthor'] = $emailauthor;
            $data['message'] = $message;
            $data['date'] = date("Y-m-d H:i");
            $data['status'] = 1;
            
            
            if($comment->save($data)){
                //$this->email->send()
                $sendcomment = array(
                    "class" => "alert alert-success",
                    "message" => "Agradecemos o seu comentário.");
                
                $detail = $news->search($commentnews);
                $comments = $comment->listing($commentnews);

                $num = 0;
                foreach ($comments as $comment) {
                    $num++;
                }

                $important = $news->listimportant();

                $msg = array("important" => $important, "detail" => $detail, "comments" => $comments, "num" => $num, "sendcomment" => $sendcomment);

                $this->load->view('template/public/header');            
                $this->load->view('public/newsdetail', $msg);
                $this->load->view('template/public/newsmenu', $msg);
                $this->load->view('template/public/footer');
               
            }
        }
    }
?>