<?php

require 'Model/Connection.php';

class InsertController
{
    public function inputStudentData(){


    }

    public function renderInsert(array $GET, array $POST)
    {
        $firstName = $lastName = $email = "";
        $fNameErr = $lNameErr = $emailErr = $passErr= $passConfErr="";
        $date = new DateTime();
        $id = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['fname'])) {
                $fNameErr = "First name is required" . '<br>';
            } else {
                $firstName = $_POST['fname'];
            }
            if (empty($_POST['lname'])) {
                $lNameErr = "Last name is required" . '<br>';
            } else {
                $lastName = $_POST['lname'];
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                filter_var($email, FILTER_VALIDATE_EMAIL);
            } else {

                $emailErr = "E-mail adress is invalid" . '<br>';
            }

            if (empty($_POST['password'])) {
                $passErr = "password is required" . '<br>';
            } else {
                $password=$_POST['password'];
            }
            if (empty($_POST['passwordConf'])) {
                $passConfErr = "please confirm the password" . '<br>';
            }else {
                $passConfirm=$_POST['passwordConf'];
            }

            if ($fNameErr == "" && $lNameErr == "" && $emailErr == "" && $passConfErr== "" && $passErr =="") {
                //Post code to database.
                $connector = new Connection();
                $pdo = $connector->getPdo();

                $handle = $pdo->prepare("INSERT INTO student VALUES (:id, :first_name, :last_name, :email, :created_at )");
                $handle->bindValue(':first_name', $firstName);
                $handle->bindValue(':last_name', $lastName);
                $handle->bindValue(':email', $email);
                $handle->bindValue(':created_at', $date->format('Y-m-d H:i:s'));
                $handle->bindValue(':id', $id);
                $handle->execute();
            }


            var_dump($POST);
            require 'View/register.php';
        }


    }
}
