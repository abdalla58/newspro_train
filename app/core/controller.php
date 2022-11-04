<?php
namespace MVC\core;
use Dcblogdev\PdoWrapper\Database  ;


class controller{
    public function view($path,$param){
        //echo VIEW.$path.".php";die;
        extract($param);
        require_once(VIEW.$path.".php");
    }

}