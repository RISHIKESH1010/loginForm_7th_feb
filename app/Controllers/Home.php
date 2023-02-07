<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
       //return view('welcome_message');
        //return "This is our home page";
        echo view('common/header');
        return view('home');       
    }

  
}
    

    




