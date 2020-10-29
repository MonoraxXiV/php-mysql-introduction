<?php

ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');

error_reporting(E_ALL);

session_start();
require 'Controller/HomepageController.php';
require 'Controller/ProfileController.php';
require 'Controller/LoginController.php';
require 'Model/Auth.php';

require 'Controller/InsertController.php';
function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

//whatishappening();
$ProfileControl = new ProfileController();
$homepageControl = new HomepageController();
$LoginControl = new LoginController();

$insertControl= new InsertController();
//$LoginControl->getLogin($_GET,$_POST);
$auth = new Auth();
$isLoggedIn=$auth->getLogin($_POST['email'], $_POST['password']);

$_SESSION['LogInStatus']=$isLoggedIn;
$_SESSION['user']="";
var_dump($_SESSION);

if (empty($_GET['page'])){
    $_GET['page']="";
}

//when attempting to log in boolean loses his true value, until logged in again.

if ($isLoggedIn == true) {

    if (isset($_GET['user'])) {
        $ProfileControl->ProfileRender($_GET, $_POST);

    } else {
        $homepageControl->renderHomepage($_GET, $_POST);
    }
} elseif ($isLoggedIn==false && $_GET['page']!=='Register') {

    $LoginControl->LoginRender($_GET, $_POST);
}elseif (($isLoggedIn==false) && $_GET['page']=='Register'){

    $insertControl->renderInsert($_GET,  $_POST);
}
