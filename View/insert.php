<?php
require 'Model/Connection.php';
?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mysql-introduction</title>
</head>
<body>
<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">
    <label for="email">e-mail:</label><br>
    <input type="text" id="email" name="email">
    <input type="submit" value="Submit">
</form>
</body>
</html>
