<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Validate_login extends BaseController
{
    public function index()
    {
        $myemailtemp = "shreyaspatil@gmail.com";
        $mypasstemp = "shreyaspatil";



        print_r("Hii");


        if (isset($_POST['loginbutton'])) {
            print_r("Hii88888");
            $email = $_POST['email'];
            
            $rem = $_POST['remember'];

            print_r("Hii1111");

            if($myemailtemp == $email)
            {

            }
            else{
                echo "Invalid email or password. <br> click here to <a href=' " . base_url('login') . "'>Login again</a>";
            }

        } else {
            echo view("login");
        }

    }


}