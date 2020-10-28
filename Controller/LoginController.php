<?php



class LoginController
{
    public $passErr;
    public $emailErr;
    public function getLogin(array $GET, array $POST){

        $this->passErr=$this->emailErr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['email'])) {
                $this->emailErr = " e-mail is required" . '<br>';
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $this->emailErr= "e-mail is invalid";
            }
            else{
                $email=$_POST['email'];
            }

            if (empty($_POST['password'])) {
                $this->passErr = " password is required" . '<br>';
            }else {
                $password=$_POST['password'];
            }
            $Auth=new Auth();
            $isLoggedIn=$Auth->getLogin($email,$password);
            return $isLoggedIn;

        }

    }

    public function LoginRender(array $GET, array $POST){

        $this->getLogin($GET, $POST);
        var_dump($_POST);
        require 'View/Login.php';
    }
}