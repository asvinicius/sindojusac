<?php
class PartnershipsModel extends CI_Model{
    
    protected $partnershipsid;
    protected $partnername;
    protected $partnerdescription;
    protected $partnermain;
    protected $partnermini;
    protected $signaturedate;
    protected $status;
    
    function __construct() {
        parent::__construct();
        $this->setPartnershipsid(null);
        $this->setPartnername(null);
        $this->setPartnerdescription(null);
        $this->setPartnermain(null);
        $this->setPartnermini(null);
        $this->setSignaturedate(null);
        $this->setStatus(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('partnerships', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("partnershipsid", $data['partnershipsid']);
            if ($this->db->update('partnerships', $data)) {
                return true;
            }
        }
    }
    public function delete($partnershipsid) {
        if ($partnershipsid != null) {
            $this->db->where("partnershipsid", $partnershipsid);
            if ($this->db->delete("partnerships")) {
                return true;
            }
        }
    }
    
    public function listing() {
        $this->db->select('*');
        $this->db->order_by("partnername", "asc");
        return $this->db->get("partnerships")->result();
    }
    
    public function search($partnershipsid) {
        $this->db->where("partnershipsid", $partnershipsid);
        return $this->db->get("partnerships")->row_array();
    }
    
    function getPartnershipsid() {
        return $this->partnershipsid;
    }

    function getPartnername() {
        return $this->partnername;
    }

    function getPartnerdescription() {
        return $this->partnerdescription;
    }

    function getPartnermain() {
        return $this->partnermain;
    }

    function getPartnermini() {
        return $this->partnermini;
    }

    function getSignaturedate() {
        return $this->signaturedate;
    }

    function getStatus() {
        return $this->status;
    }

    function setPartnershipsid($partnershipsid) {
        $this->partnershipsid = $partnershipsid;
    }

    function setPartnername($partnername) {
        $this->partnername = $partnername;
    }

    function setPartnerdescription($partnerdescription) {
        $this->partnerdescription = $partnerdescription;
    }

    function setPartnermain($partnermain) {
        $this->partnermain = $partnermain;
    }

    function setPartnermini($partnermini) {
        $this->partnermini = $partnermini;
    }

    function setSignaturedate($signaturedate) {
        $this->signaturedate = $signaturedate;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}