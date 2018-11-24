<?php
class PhoneModel extends CI_Model{
    
    protected $phoneid;
    protected $userphone;
    protected $number;
    
    function __construct() {
        parent::__construct();
        $this->setPhoneid(null);
        $this->setUserphone(null);
        $this->setNumber(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('phone', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("phoneid", $data['phoneid']);
            if ($this->db->update('phone', $data)) {
                return true;
            }
        }
    }
    public function delete($phoneid) {
        if ($phoneid != null) {
            $this->db->where("phoneid", $phoneid);
            if ($this->db->delete("phone")) {
                return true;
            }
        }
    }
    
    public function listing() {
        $this->db->select('*');
        $this->db->order_by("phoneid", "asc");
        return $this->db->get("phone")->result();
    }
    
    public function search($phoneid) {
        $this->db->where("phoneid", $phoneid);
        return $this->db->get("phone")->row_array();
    }
    
    function getPhoneid() {
        return $this->phoneid;
    }

    function getUserphone() {
        return $this->userphone;
    }

    function getNumber() {
        return $this->number;
    }

    function setPhoneid($phoneid) {
        $this->phoneid = $phoneid;
    }

    function setUserphone($userphone) {
        $this->userphone = $userphone;
    }

    function setNumber($number) {
        $this->number = $number;
    }


}