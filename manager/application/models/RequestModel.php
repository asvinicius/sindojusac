<?php
class RequestModel extends CI_Model{
    
    protected $requestid;
    protected $user;
    protected $date;
    protected $status;
    
    function __construct() {
        parent::__construct();
        $this->setRequestid(null);
        $this->setUser(null);
        $this->setDate(null);
        $this->setStatus(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('request', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("requestid", $data['requestid']);
            if ($this->db->update('request', $data)) {
                return true;
            }
        }
    }
    public function delete($requestid) {
        if ($requestid != null) {
            $this->db->where("requestid", $requestid);
            if ($this->db->delete("request")) {
                return true;
            }
        }
    }
    
    public function listing() {
        $this->db->where("status", 1);
        $this->db->order_by("date", "asc");
        return $this->db->get("request")->result();
    }
    
    public function search($requestid) {
        $this->db->where("requestid", $requestid);
        return $this->db->get("request")->row_array();
    }
    function getRequestid() {
        return $this->requestid;
    }

    function getUser() {
        return $this->user;
    }

    function getDate() {
        return $this->date;
    }

    function getStatus() {
        return $this->status;
    }

    function setRequestid($requestid) {
        $this->requestid = $requestid;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}