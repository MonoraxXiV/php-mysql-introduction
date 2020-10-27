<?php


class LoginController
{
    public function getLogin(array $GET, array $POST){

        $passErr=$emailErr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['email'])) {
                $emailErr = " e-mail is required" . '<br>';
            }else {
                $email=$_POST['email'];
            }

            if (empty($_POST['password'])) {
                $passErr = " password is required" . '<br>';
            }else {
                $password=$_POST['password'];
            }
            $Auth=new Auth();
            $isLoggedIn=$Auth->getLogin($email,$password);

        }

    }

    public function LoginRender(array $GET, array $POST){

        $this->getLogin($GET, $POST);
        var_dump($_POST);
        require 'View/Login.php';
    }
}