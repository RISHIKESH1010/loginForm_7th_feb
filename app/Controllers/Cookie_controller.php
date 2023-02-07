<?php 

namespace App\Controllers;

use \App\Models\UserModel;


   class Cookie_controller extends BaseController
    { 
        public function index()
	{
        helper("cookie");

        // store a cookie value
        set_cookie("username", "online_web_tutor_blog", 3600);

        // get cookie value
        //get_cookie("username");

        // remove cookie value
        delete_cookie("username");

        echo "Hii";

        

		//return view('welcome_message');
	}		
    } 
 ?>
