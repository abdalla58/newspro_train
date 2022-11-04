<?php
namespace MVC\core;

class helpers{
    public static function redirect($pass){
        header("LOCATION: http://practise.test/".$pass);
    }
}
