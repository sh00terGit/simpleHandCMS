<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */


Class NewsModel {
    
    public $id;
    public $title;
    public $text;
    public $date;
    
    public $comments = array();
    
    
    public function addComment($comment) {
        require '/models/Comments.php';
        $this->comments[] = new Comments($comment);
        return $this;
    }
    
    public function getComments() {
        return $this->comments;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    public function setDate($date) {
        $this->date = $date;
        return $this;
    }


    
}
