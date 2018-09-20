<?php
class CovenantsModel extends CI_Model{
    
    protected $covenantsid;
    protected $company;
    protected $covenantdescription;
    protected $covenantmain;
    protected $covenantmini;
    protected $signaturedate;
    protected $status;
    
    function __construct() {
        parent::__construct();
        $this->setCovenantsid(null);
        $this->setCompany(null);
        $this->setCovenantdescription(null);
        $this->setCovenantmain(null);
        $this->setCovenantmini(null);
        $this->setSignaturedate(null);
        $this->setStatus(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('covenants', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("covenantsid", $data['covenantsid']);
            if ($this->db->update('covenants', $data)) {
                return true;
            }
        }
    }
    public function delete($covenantsid) {
        if ($covenantsid != null) {
            $this->db->where("covenantsid", $covenantsid);
            if ($this->db->delete("covenants")) {
                return true;
            }
        }
    }
    
    public function listing() {
        $this->db->where("status", 1);
        $this->db->order_by("company", "asc");
        return $this->db->get("covenants")->result();
    }
    
    public function search($covenantsid) {
        $this->db->where("covenantsid", $covenantsid);
        return $this->db->get("covenants")->row_array();
    }
    
    function getCovenantsid() {
        return $this->covenantsid;
    }

    function getCompany() {
        return $this->company;
    }

    function getCovenantdescription() {
        return $this->covenantdescription;
    }

    function getCovenantmain() {
        return $this->covenantmain;
    }

    function getCovenantmini() {
        return $this->covenantmini;
    }

    function getSignaturedate() {
        return $this->signaturedate;
    }

    function getStatus() {
        return $this->status;
    }

    function setCovenantsid($covenantsid) {
        $this->covenantsid = $covenantsid;
    }

    function setCompany($company) {
        $this->company = $company;
    }

    function setCovenantdescription($covenantdescription) {
        $this->covenantdescription = $covenantdescription;
    }

    function setCovenantmain($covenantmain) {
        $this->covenantmain = $covenantmain;
    }

    function setCovenantmini($covenantmini) {
        $this->covenantmini = $covenantmini;
    }

    function setSignaturedate($signaturedate) {
        $this->signaturedate = $signaturedate;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}