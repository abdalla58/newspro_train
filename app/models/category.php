<?php

namespace MVC\models;

use MVC\core\model;

class category extends model {
    public function GetAllCategory(){
        $data= model::db()->run("SELECT * FROM category")->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetCategory($id){
        return model::db()->row("SELECT * FROM category where id = $id");//->fetchAll(\PDO::FETCH_ASSOC);

    }
    public function deletecategory($id){
        return model::db()->delete('category',['id' => $id]);
    }
    public function addcategory($data){
        return model::db()->insert('category',$data);
    }
    public function updatecategory($data,$id){
        return model::db()->update('category',$data,$id);
    }

}
