<?php
require 'Model/Student.php';
class Connection
{
 private PDO $pdo;


    public function __construct()
    {
        $pdo = Connection::openConnection();
        $this->pdo = $pdo;
    }

    function openConnection() : PDO {
        // Try to figure out what these should be for you
        $dbhost    = "localhost";//probably localhost
        $dbuser    = "becode";
        $dbpass    = "Becode!123";
        $db        = "becode";

        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        // Try to understand what happens here
        $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass, $driverOptions);

        // Why we do this here
        return $pdo;
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    public function getStudent(){



}
}