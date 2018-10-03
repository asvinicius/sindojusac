<?php
class NewsModel extends CI_Model{
    
    protected $newsid;
    protected $type;
    protected $title;
    protected $slug;
    protected $abstract;
    protected $content;
    protected $main;
    protected $thumb;
    protected $internal;
    protected $date;
    protected $status;
    
    function __construct() {
        parent::__construct();
        $this->setNewsid(null);
        $this->setType(null);
        $this->setTitle(null);
        $this->setSlug(null);
        $this->setAbstract(null);
        $this->setContent(null);
        $this->setMain(null);
        $this->setThumb(null);
        $this->setInternal(null);
        $this->setDate(null);
        $this->setStatus(null);
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
        $this->db->order_by("date", "desc");
        return $this->db->get("news")->result();
    }
    
    public function search($newsid) {
        $this->db->where("newsid", $newsid);
        return $this->db->get("news")->row_array();
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

    function getSlug() {
        return $this->slug;
    }

    function getAbstract() {
        return $this->abstract;
    }

    function getContent() {
        return $this->content;
    }

    function getMain() {
        return $this->main;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getInternal() {
        return $this->internal;
    }

    function getDate() {
        return $this->date;
    }

    function getStatus() {
        return $this->status;
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

    function setSlug($slug) {
        $this->slug = $slug;
    }

    function setAbstract($abstract) {
        $this->abstract = $abstract;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setMain($main) {
        $this->main = $main;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setInternal($internal) {
        $this->internal = $internal;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}