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
        if (!mysqli_select_db($this->db, DB_NAME)){
            exit("No that database" . mysqli_error());
        }
        mysqli_query($this->db,"SET NAMES 'UTF8'");
        mysqli_query($this->db,"SET CHARACTER SET 'UTF8'");
    }

}
