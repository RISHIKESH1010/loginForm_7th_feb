<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
       //return view('welcome_message');
        //return "This is our home page";
        echo view('common/header');
        echo view('register');
        echo view('common/footer');     
    }

    public function do_register()
    {
        $usermodel = new UserModel();

       // echo "Register form is submitted";

       $name = $this->request->getPost('name');
       $email = $this->request->getPost('email');
       $password = $this->request->getPost('password');
       $mobile = $this->request->getPost('mobile');

       //$password = password_hash($password ,PASSWORD_BCRYPT);
       $password = md5($password);


       $data = ['name'=>$name , 'email'=>$email ,'password'=>$password , 'mobile'=>$mobile];

       $r = $usermodel->insert($data);

       if($r)
       {
          echo "User registered successfully";
       }
       else{

        echo "Error getting during registration";

       }

    }

}





