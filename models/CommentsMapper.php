<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */

Class CommentsMapper extends Mapper {
    
    /**
     * Method fetch all comment from news by news id
     * 
     * @param $newsId
     * @return array comments objects
     */
        public function fetchByNewsId($newsId) {
        $query = "SELECT id,newsId,text FROM comments WHERE newsId =$newsId ORDER BY id DESC";
        $result = mysqli_query($this->db, $query);
        if (!$result) {
            exit(mysqli_error($this->db));
        }
        $comments = array();
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_array($result);
            $nextComment = new CommentsModel();
            $nextComment->setId($row['id'])
                    ->setNewsId($row['newsId'])
                    ->setText($row['text']);
            $comments[] = $nextComment;
        }
        return $comments;
        
    }
    
    /**
     * Insert new comment in comments table 
     * 
     * @param int $newsId 
     * @param string $text 
     * @return void
     */
        public function insert( $newsId, $text) {
         $query = "INSERT INTO comments (newsId,text) VALUES ('$newsId','$text')";
        $result = mysqli_query($this->db, $query);
        if (!$result) {
            exit(mysqli_error($this->db));
        }
    }

    
    
    
}
