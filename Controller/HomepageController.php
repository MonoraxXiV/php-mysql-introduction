<?php


class HomepageController
{
    public function getInformation(){
        $connector= new Connection();
        $connector->getPdo();


    }
    public function renderHomepage(array $GET, array $POST){

        require 'View/Homepage.php';
    }

}