<?php

ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');

error_reporting(E_ALL);



require 'Controller/InsertController.php';
require 'Controller/HomepageController.php';
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

//$insertControl= new InsertController();
//$insertControl->renderInsert($_GET,  $_POST);

$homepageControl= new HomepageController();
$homepageControl->renderHomepage($_GET,  $_POST);