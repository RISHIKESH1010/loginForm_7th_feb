<?php

namespace App\Controllers;


use \App\Models\UserModel;

class Update extends BaseController
{

    public function index($id)
    {
               
        echo view('common/header');
        echo view('/dashboard');
        echo view('common/footer'); 
           
    }


    
    public function update($id=null)
    {


        if($id){
                $usermodel = new UserModel();
        
                // echo "Register form is submitted";
        
                $name = $this->request->getPost('name');
                $email = $this->request->getPost('email');
                $mobile = $this->request->getPost('mobile');


                $data = ['name'=>$name , 'email'=>$email , 'mobile'=>$mobile];

                $r = $usermodel->update($id, $data);
                
        
                if($r)
                {
                    return redirect()->to('/dashboard');
                   // return redirect()->to(\current_url());
                echo "User updated successfully";
               // return redirect()->to(\current_url());
               
                }
                else{
        
                echo "Error getting during updation";
        
                }
            }

            else{
                echo "<br>";
                echo "id not entered";
            }
            
        
    }




    public function updated5($id=null)
    {
        $usermodel5 = new UserModel();

        echo "Hi....Rishi";

        $data5 = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'mobile' => $this->request->getPost('mobile')
        ];
       $p=  $usermodel5->update($id, $data5);

       if($p)
       {
          echo "User updated successfully";
       }
       else
       {
          echo "Error getting during updation";
       }        
        
    }
}
