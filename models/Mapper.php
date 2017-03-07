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
        $this->db = mysql_connect(DB_HOST, DB_USER, DB_PASS);
        if (!$this->db) {
            exit("Ошибка соединения с базой данных" . mysql_error());
        }
        if (!mysql_select_db(DB_NAME, $this->db)) {
            exit("нет такой базы данных</br>" . mysql_error());
        }
        mysql_query("SET NAMES 'UTF8'");
        mysql_query("SET CHARACTER SET 'UTF8'");
    }

}
