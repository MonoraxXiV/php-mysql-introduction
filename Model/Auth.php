<?php


class Auth
{
    public function checkLogin($email, $hash){
        //check if e-mail is correct.
        //Check if $hash/password matches
        // then return true or false depending on match or not.
        $Connect= new Connection();
        $pdo=$Connect->getPdo();
        $handle = $pdo->prepare('SELECT * FROM student WHERE email = :email');
        $handle->bindParam(':id', $email);
        $handle->execute();
        $check = $handle->fetch();


        return true;
    }
}