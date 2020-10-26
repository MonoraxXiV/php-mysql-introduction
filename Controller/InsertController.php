<?php

require 'Model/Connection.php';

class InsertController
{

    public function renderInsert (array $GET, array $POST){

        var_dump($POST);
        require 'View/insert.php';
    }











}
