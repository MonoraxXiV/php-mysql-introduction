<?php


class HomepageController
{


    public function getInformation(){
        $connector= new Connection();
        $pdo=$connector->getPdo();
        $handle=$pdo->query('SELECT * FROM student ');
        $handle->execute();
       $students=$handle->fetchAll();

        var_dump($students);
        return $students;
    }
    public function renderHomepage(array $GET, array $POST){
       $students=$this->getInformation();
        require 'View/Homepage.php';
    }

}