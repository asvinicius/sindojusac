<?php
class UserModel extends CI_Model{
    
    protected $userid;
    protected $name;
    protected $email;
    protected $username;
    protected $password;
    protected $role;
    protected $status;
    
    function __construct() {
        parent::__construct();
        $this->setUserid(null);
        $this->setName(null);
        $this->setEmail(null);
        $this->setUsername(null);
        $this->setPassword(null);
        $this->setRole(null);
        $this->setStatus(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('user', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("userid", $data['userid']);
            if ($this->db->update('user', $data)) {
                return true;
            }
        }
    }
    public function delete($userid) {
        if ($userid != null) {
            $this->db->where("userid", $userid);
            if ($this->db->delete("user")) {
                return true;
            }
        }
    }
    
    public function listing() {
        $this->db->select('*');
        $this->db->order_by("name", "asc");
        return $this->db->get("user")->result();
    }
    
    public function search($userid) {
        $this->db->where("userid", $userid);
        return $this->db->get("user")->row_array();
    }
    
    public function lastinsert() {
        return $this->search($this->db->insert_id("user"));
    }
    
    function getUserid() {
        return $this->userid;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function getStatus() {
        return $this->status;
    }

    function setUserid($userid) {
        $this->userid = $userid;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}