<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */
Class CommentsModel {
    
    public $id;
    public $text;
    
    public function getId() {
        return $this->id;
    }

    public function getText() {
        return $this->text;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }


    
}
