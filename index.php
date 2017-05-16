<?php
require 'config.php';
// This is autoloader for libs files.
function __autoload($class)
{

    if(file_exists( LIB .$class.".php")){
            require_once LIB. $class.".php";
    }
    elseif(file_exists("models/".$class.".php")) {
            require_once "models/".$class.".php";
       
        } else {  
            /** while error */
            exit("The file name does not match the class name");
        }
}
$app = new Bootstrap();