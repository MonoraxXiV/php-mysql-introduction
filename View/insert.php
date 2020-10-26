<?php




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mysql-introduction</title>
</head>
<body>
<form  method="post">
    <h1>Registration form</h1>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"  value="<?php echo $firstName ?>"><br>
    <span class="error"><?php echo $fNameErr;?></span>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"  value="<?php echo $lastName ?>"><br>
    <span class="error"><?php echo $lNameErr;?></span>
    <label for="email">e-mail:</label><br>
    <input type="text" id="email" name="email" value="<?php echo $email ?>"><br>
    <span class="error"><?php echo $emailErr;?></span>
    <input type="submit" value="Submit">


</form>
</body>
</html>
