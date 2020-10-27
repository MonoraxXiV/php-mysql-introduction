<?php

require 'Model/Connection.php';

class InsertController
{

public $fNameErr;
public $lNameErr;
public $emailErr;
public $passErr ;
public $passConfErr = "";

public $firstName;
public $lastName;
public $email;
public $password;
public $passConfirm;

    public function inputStudentData()
    {


        $date = new DateTime();
        $id = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['fname'])) {
                $this->fNameErr = "First name is required" . '<br>';
            } else {
                $this->firstName = $_POST['fname'];
            }
            if (empty($_POST['lname'])) {
                $this->lNameErr = "Last name is required" . '<br>';
            } else {
                $this->lastName = $_POST['lname'];
            }

            if (isset($_POST['email'])) {
                $this->email = $_POST['email'];
                filter_var($this->email, FILTER_VALIDATE_EMAIL);
            } else {

                $this->emailErr = "E-mail adress is invalid" . '<br>';
            }

            if (empty($_POST['password'])) {
                $this->passErr = "password is required" . '<br>';
            } else {
                $this->password = $_POST['password'];
            }
            if (empty($_POST['passwordConf'])) {
                $this->passConfErr = "please confirm the password" . '<br>';
            } else {
                $this->passConfirm = $_POST['passwordConf'];
            }

            if ($this->password !== $this->passConfirm) {
                $this->passConfErr = " passwords do not match" . '<br>';
            }else{
                $hashed=password_hash($this->password, PASSWORD_DEFAULT);

            }
            if ($this->fNameErr == "" && $this->lNameErr == "" && $this->emailErr == "" && $this->passConfErr == "" && $this->passErr == "") {
                //Post code to database.
                $connector = new Connection();
                $pdo = $connector->getPdo();

                $handle = $pdo->prepare("INSERT INTO student VALUES (:id, :first_name, :last_name, :email, :created_at, :password )");
                $handle->bindValue(':first_name', $this->firstName);
                $handle->bindValue(':last_name', $this->lastName);
                $handle->bindValue(':email', $this->email);
                $handle->bindValue(':created_at', $date->format('Y-m-d H:i:s'));
                $handle->bindValue(':id', $id);
                $handle->bindValue(':password', $hashed);
                $handle->execute();
                //have to find a way to show that if this succeeds, return a boolean, then switch controller depending on boolean status.
            }
        }
    }

    public
    function renderInsert(array $GET, array $POST)
    {

        $this->inputStudentData();
        var_dump($POST);
        require 'View/register.php';
    }
}



