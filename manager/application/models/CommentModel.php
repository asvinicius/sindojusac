<?php
class CommentModel extends CI_Model{
    
    protected $commentid;
    protected $news;
    protected $author;
    protected $emailauthor;
    protected $message;
    protected $date;
    protected $status;
    
    function __construct() {
        parent::__construct();
        $this->setCommentid(null);
        $this->setNews(null);
        $this->setAuthor(null);
        $this->setEmailauthor(null);
        $this->setMessage(null);
        $this->setDate(null);
        $this->setStatus(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('comment', $data)) {
                return true;
            }
        }
    }
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("commentid", $data['commentid']);
            if ($this->db->update('comment', $data)) {
                return true;
            }
        }
    }
    public function delete($commentid) {
        if ($commentid != null) {
            $this->db->where("commentid", $commentid);
            if ($this->db->delete("comment")) {
                return true;
            }
        }
    }
    
    public function listing($newsid) {
        $this->db->where("news", $newsid);
        $this->db->where("status", 1);
        $this->db->order_by("date", "desc");
        return $this->db->get("comment")->result();
    }
    
    public function listingall($newsid) {
        $this->db->where("news", $newsid);
        $this->db->order_by("date", "desc");
        return $this->db->get("comment")->result();
    }
    
    public function search($commentid) {
        $this->db->where("commentid", $commentid);
        return $this->db->get("comment")->row_array();
    }
    
    function getCommentid() {
        return $this->commentid;
    }

    function getNews() {
        return $this->news;
    }

    function getAuthor() {
        return $this->author;
    }

    function getEmailauthor() {
        return $this->emailauthor;
    }

    function getMessage() {
        return $this->message;
    }

    function getDate() {
        return $this->date;
    }

    function getStatus() {
        return $this->status;
    }

    function setCommentid($commentid) {
        $this->commentid = $commentid;
    }

    function setNews($news) {
        $this->news = $news;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setEmailauthor($emailauthor) {
        $this->emailauthor = $emailauthor;
    }

    function setMessage($message) {
        $this->message = $message;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}