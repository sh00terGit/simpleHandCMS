<?php

/*
 *
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */

Class NewsMapper extends Mapper {

    public function __construct() {
        parent::__construct();
    }

    public function fetchByPage($page) {
        $query = "SELECT id,title,text,date FROM news LIMIT " . LIMIT_VALUE . " OFFSET " . LIMIT_VALUE * ($page - 1);
        $result = mysql_query($query);
        if (!$result) {
            exit(mysql_error());
        }
        $news = array();
        for ($i = 0; $i < mysql_num_rows($result); $i++) {
            $row = mysql_fetch_array($result, MYSQL_ASSOC);
            $nextNews = new NewsModel();
            $nextNews->setId($row['id'])
                    ->setDate($row['date'])
                    ->setText($row['text'])
                    ->setTitle($row['title']);
            $news[] = $nextNews;
        }
        return $news;
    }

    public function insert($data) {
        
    }

    public function update($data) {
        
    }

    public function delete($id) {
        
    }

    public function fetchById($id) {
        $query = "SELECT id,title,text,date FROM news WHERE id =$id LIMIT 1";
        $result = mysql_query($query);
        if (!$result) {
            exit(mysql_error());
        }
        $row = mysql_fetch_row($result, MYSQL_ASSOC);
        var_dump($row);
        $nextNews = new NewsModel();
        $nextNews->setId($row['id'])
                ->setDate($row['date'])
                ->setText($row['text'])
                ->setTitle($row['title']);
        return $nextNews;
    }
    
    
    
        public function fetchAll() {
        $query = "SELECT id,title,text,date FROM news ";
        $result = mysql_query($query);
        if (!$result) {
            exit(mysql_error());
        }
        $news = array();
        for ($i = 0; $i < mysql_num_rows($result); $i++) {
            $row = mysql_fetch_array($result, MYSQL_ASSOC);
            $nextNews = new NewsModel();
            $nextNews->setId($row['id'])
                    ->setDate($row['date'])
                    ->setText($row['text'])
                    ->setTitle($row['title']);
            $news[] = $nextNews;
        }
        return $news;
    }

}
