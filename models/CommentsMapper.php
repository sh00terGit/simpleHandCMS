<?php

/* 
*
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */

Class CommentsMapper extends Mapper {
    

    public function fetchByNewsId($id) {
//        $query = "SELECT name_material,measure,price_of_one,quantity FROM materials";
        $result = mysql_query($query);
        if (!$result) {
            exit(mysql_error());
        }
    }
    
    public function insert($data){
    }

    
    
    
}
