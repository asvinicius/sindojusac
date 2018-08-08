<?php
class NewsModel extends CI_Model{
    
    protected $newsid;
    protected $type;
    protected $title;
    protected $abstract;
    protected $content;
    protected $image;
    protected $date;
    
    function __construct() {
        parent::__construct();
        $this->setNewsid(null);
        $this->setType(null);
        $this->setTitle(null);
        $this->setAbstract(null);
        $this->setContent(null);
        $this->setImage(null);
        $this->setDate(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('news', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("newsid", $data['newsid']);
            if ($this->db->update('news', $data)) {
                return true;
            }
        }
    }
    public function delete($newsid) {
        if ($newsid != null) {
            $this->db->where("newsid", $newsid);
            if ($this->db->delete("news")) {
                return true;
            }
        }
    }
    
    public function listing() {
        $this->db->select('*');
        $this->db->order_by("date", "asc");
        return $this->db->get("news")->result();
    }
    
    function getNewsid() {
        return $this->newsid;
    }

    function getType() {
        return $this->type;
    }

    function getTitle() {
        return $this->title;
    }

    function getAbstract() {
        return $this->abstract;
    }

    function getContent() {
        return $this->content;
    }

    function getImage() {
        return $this->image;
    }

    function getDate() {
        return $this->date;
    }

    function setNewsid($newsid) {
        $this->newsid = $newsid;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setAbstract($abstract) {
        $this->abstract = $abstract;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setDate($date) {
        $this->date = $date;
    }


    
}