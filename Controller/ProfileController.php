<?php


class ProfileController
{

    public function getStudentData(array $GET, array $POST)
    {
        $connector = new Connection();
        $pdo = $connector->getPdo();
        $user_id = $_GET['user'];
        $handle = $pdo->prepare('SELECT * FROM student WHERE id = :id');
        $handle->bindParam(':id', $user_id);
        $handle->execute();
        $selection = $handle->fetch();



        return $selection;
    }

  public function fetchImage(){
      $fetchCat = file_get_contents('https://api.thecatapi.com/v1/images/search' );
      $catQuery = json_decode($fetchCat, true);

      $catImage= $catQuery[0]['url'];

      return $catImage;
  }

    public function ProfileRender(array $GET, array $POST)
    {
        $selection = $this->getStudentData($GET, $POST);
       $catImage=$this->fetchImage();


        require 'View/Profile.php';

    }


}