<?php

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rem = $_POST['remember'];

}
else{
    echo view("login");
}
?>