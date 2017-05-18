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
    public $shortText;  // full text trimmed to 200 char value 


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
        $this->setShortText($text);
        return $this;
    }

    public function setShortText($text) {
        $this->shortText = substr($text,0,200);
        return $this;
    }
    
    public function getShortText() {
        return $this->shortText;
    }
    
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }


    
}
