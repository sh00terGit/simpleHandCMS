<?php
require 'config.php';
// This is autoloader for libs files.
function __autoload($class)
{
    //	require LIB . $class .".php";
    if(file_exists( LIB .$class.".php")){
            require_once LIB. $class.".php";
    }
    elseif(file_exists("models/".$class.".php")) {
            require_once "models/".$class.".php";
        /** При ошибке */
        } else {
            exit("Имя файла не соответствует названии Класса");
        }
}
$app = new Bootstrap();