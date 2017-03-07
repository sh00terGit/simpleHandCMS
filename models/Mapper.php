<?php

/*
 *
 * @author Shipul Andrey 
 *  @position Nod-4 ivc
 * 
 */

Class Mapper extends PDO{

    protected $db;

    // соединение с базой данных , база данных указана в config.php
    public function __construct() {
        $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
        if (!$this->db) {
            exit("Ошибка соединения с базой данных" . mysql_error());
        }
        if (!mysqli_select_db( $this->db,DB_NAME)) {
            exit("нет такой базы данных</br>" . mysqli_error($this->db));
        }
        mysqli_query($this->db,"SET NAMES 'UTF8'");
        mysqli_query($this->db,"SET CHARACTER SET 'UTF8'");
    }

}
