<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Login extends BaseController
{

    
    public function index()
    {
        //return view('welcome_message');
        //return "This is our home page";


        echo view('common/header');
        echo view('login');
        echo view('common/footer');
    }

    public function do_login()
    {
        $usermodel1 = new UserModel();

        //echo "Login page submitted here";

        // $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $result = $usermodel1->where('email', $email)->first();

        //print "<pre>";
        //print_r($result);
        //print "$password  ";
        //print md5($password);

        //$emailtempadd = "shreyaspatil@gmail.com";
        echo "Hiii11111........";

        helper('cookie');

        if ($result->id > 0) 
        {
            echo "Hi00000";

            if (md5($password) == $result->password) 
            {
                echo "Hii111";                  
                $emailtemp = $_POST['email'];
                $passtemp =$_POST['password'] ;


                echo "$emailtemp";

                    if (isset($_POST["remember"])) 
                    {
                            echo "Hii444444";

                            
                           // set_cookie("email", "Hiiii",3600);
                            //set_cookie("username", "online_web_tutor_blog", 3600);
                           // get_cookie("username");

                         setcookie('uname1', 'Hii', time() + 60*60*24*10, "/");
                         setcookie('emailcookie', $emailtemp, time()+60, "/");
                         //setcookie('email from seesion', $result->email, time()+60, "/");
                         setcookie('passcookie', $passtemp, time()+60, "/");

                    }
                $this->session->set("user", $result);
                return redirect()->to('/dashboard/up/' . $result->id);
            } 
            else 
            {
                echo "Invalid email or password. <br> click here to <a href=' " . base_url('login') . "'>Login again</a>";
            }
        } 
        else 
        {
            echo "Something wrong";
        }


        /*
        if((get_cookie("email")))
        {
        $getemail = get_cookie("email");
        echo "<script>
        {
        document.getElementById('email').value='$getemail';
        </script>";
        }
        }
        */


    }
}










/*
if ($result->id > 0) 
{
if (md5($password) == $result->password) 
{
//if ($this->input->post("loginbutton"))
//if(isset($_POST["submit"]))
{
//echo "kkkk";
//$emailtemp = $this->input->post('email');
//$emailtemp = $_POST['email'];
//if ($emailtemp== $emailtempadd)
{
//if($this->input->post('remember'))
//if(isset)
{
helper("cookie");
set_cookie("email", $email, 2 * 60);
//set_cookie("password", $password, 2 * 60);
}
}
}
$this->session->set("user", $result);
return redirect()->to('/dashboard/edit/' . $result->id);
} 
else 
{
echo "Invalid email or password. <br> click here to <a href=' " . base_url('login') . "'>Login again</a>";
}
} 
else 
{
echo "Something wrong";
}
*/




/*
 if ($result->id > 0) 
        {
            echo "Hi00000";

            if (md5($password) == $result->password) 
            {
                echo "Hii111";

                if (isset($_POST["loginbutton"])) 
                {
                    echo "Hii2222";
                    $emailtemp = $_POST['email'];


                    if ($emailtemp == $result->email) 
                    {
                        echo "Hii3333";


                        if (isset($_POST["remember"])) 
                        {
                            echo "Hii444444";

                            helper('cookie');
                            set_cookie("email", $emailtemp, 60 * 60 * 7);
                            set_cookie("username", "online_web_tutor_blog", 3600);
                            get_cookie("username");

                        }

                        //return redirect()->to("home");
                        $this->session->set("user", $result);
                        return redirect()->to('/dashboard/up/' . $result->id);
                    } 
                    else
                    {
                        echo "email is wrong entered";
                    }

                }

                //set_cookie("email", $result->$email, 60 * 60);
                //set_cookie("password", $password, 2 * 60);

                //$this->session->set("user", $result);
                //return redirect()->to('/dashboard/up/' . $result->id);

            } 
            else 
            {
                echo "Invalid email or password. <br> click here to <a href=' " . base_url('login') . "'>Login again</a>";
            }
        } 
        else 
        {
            echo "Something wrong";
        }
*/