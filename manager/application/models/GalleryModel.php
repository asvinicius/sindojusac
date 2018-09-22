<?php
class GalleryModel extends CI_Model{
    
    protected $photoid;
    protected $phototitle;
    protected $photodate;
    protected $photoaddress;
    protected $status;
    
    function __construct() {
        parent::__construct();
        $this->setPhotoid(null);
        $this->setPhototitle(null);
        $this->setPhotodate(null);
        $this->setPhotoaddress(null);
        $this->setStatus(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('gallery', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("photoid", $data['photoid']);
            if ($this->db->update('gallery', $data)) {
                return true;
            }
        }
    }
    public function delete($photoid) {
        if ($photoid != null) {
            $this->db->where("photoid", $photoid);
            if ($this->db->delete("gallery")) {
                return true;
            }
        }
    }
    
    public function listing() {
        $this->db->select('*');
        $this->db->order_by("photodate", "desc");
        return $this->db->get("gallery")->result();
    }
    
    public function search($photoid) {
        $this->db->where("photoid", $photoid);
        return $this->db->get("gallery")->row_array();
    }
    
    function getPhotoid() {
        return $this->photoid;
    }

    function getPhototitle() {
        return $this->phototitle;
    }

    function getPhotodate() {
        return $this->photodate;
    }

    function getPhotoaddress() {
        return $this->photoaddress;
    }

    function getStatus() {
        return $this->status;
    }

    function setPhotoid($photoid) {
        $this->photoid = $photoid;
    }

    function setPhototitle($phototitle) {
        $this->phototitle = $phototitle;
    }

    function setPhotodate($photodate) {
        $this->photodate = $photodate;
    }

    function setPhotoaddress($photoaddress) {
        $this->photoaddress = $photoaddress;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}