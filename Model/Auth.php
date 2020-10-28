<?php


class Auth
{
    Public function checkEmail(){

    }
    public function getLogin($email, $hash)
    {
        //check if e-mail is correct.
        //Check if $hash/password matches
        // then return true or false depending on match or not.
        $Connect = new Connection();
        $pdo = $Connect->getPdo();
        $handle = $pdo->prepare('SELECT * FROM student WHERE email = :email');
        $handle->bindParam(':email', $email);
        $handle->execute();
        $check = $handle->fetch();
        //https://www.php.net/manual/en/function.password-verify.php

        if (password_verify($hash, $check['password'])) {

            return $isLoggedin= true;
        } else {
            echo "email and/ or password was incorrect";
            return $isLoggedin=false;

        }



    }


}