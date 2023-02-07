<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
       //return view('welcome_message');
        //return "This is our home page";

       // if(session('user')->id<1)
        //{
          //  return redirect()->to('login');
        //}
        
       // return view('dashboard');
             
       echo view('common/header');
       echo view('/dashboard');
       echo view('common/footer'); 
       
    }
}





