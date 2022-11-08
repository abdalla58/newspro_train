<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\helpers;
use MVC\core\session;
use MVC\models\user;
use Rakit\Validation\Validator;


class usercontroller extends controller {
    public function __construct(){
        session::Start();
    }

    public function index(){
        echo 'user';
    }
    public function login(){
        $this->view('home/login',['title'=>'login']);
    }
    public function postlogin(){
        $validator = new Validator();
        $validation = $validator->validate($_POST,[
            'email' => 'required'
        ]);
        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            $user=new user();
            $data = $user->GetUser($_POST['email'],$_POST['password']);
            echo "<pre>";
            session::Set('user',$data);
            helpers::redirect('adminpost/index');
        }
    }
    public function logout(){
        session::Stop();
    }
}
