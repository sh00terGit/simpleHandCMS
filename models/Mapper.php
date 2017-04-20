<?php

/*
 *
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */

Class Mapper extends PDO{

    protected $db;  // db pointer

    //connection with DB
    public function __construct() {
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
        if (!$this->db) {
            exit("Error connection" . mysql_error());
        }
        if (!mysql_select_db(DB_NAME, $this->db)) {
            exit("No that database" . mysql_error());
        }
        mysqli_query($this->db,"SET NAMES 'UTF8'");
        mysqli_query($this->db,"SET CHARACTER SET 'UTF8'");
    }

}
