<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Logout extends BaseController
{
    
        public function logout()
    {
        $session = session();
        $session->destroy();
        //delete_cookie("email");

        return redirect()->to('/register');

    }
    
}