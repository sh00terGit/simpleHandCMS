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
        $result = mysql_query($query);
        if (!$result) {
            exit(mysql_error());
        }
        $comments = array();
        for ($i = 0; $i < mysql_num_rows($result); $i++) {
            $row = mysql_fetch_array($result, MYSQL_ASSOC);
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
        $result = mysql_query($query);
        if (!$result) {
            exit(mysql_error());
        }
    }

    
    
    
}
