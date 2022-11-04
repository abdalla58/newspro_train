<?php

namespace MVC\models;

use MVC\core\model;

class user extends model {
    public function GetAllUsers(){
        $data= model::db()->run("SELECT * FROM user")->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }
    public static function GetUser($email,$password)
    {
        $data= model::db()->row("SELECT * FROM user WHERE email = ? && password = ?" , [$email,$password]);//->fetchAll(\PDO::FETCH_ASSOC);
        //print_r($data);
        return $data;
    }
}
