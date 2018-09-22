<?php 
defined('BASEPATH') OR exit('No direct');

    class Gallery extends CI_Controller{
        public function index(){
            $this->load->model('GalleryModel');
            $gallery = new GalleryModel();
            
            $data = $gallery->listing();
            $num = 0;
            foreach ($data as $photo) {
                $num++;
            }
            $msg = array("num" => $num, "gallery" => $data);
            
            $this->load->view('template/public/header');
            $this->load->view('public/gallery', $msg);
            $this->load->view('template/public/footer');
        }
    }
?>