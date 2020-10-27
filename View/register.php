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
    <input type="text" id="fname" name="fname"  value="<?php echo $this->firstName ?>"><br>
    <span class="error"><?php echo $this->fNameErr;?></span>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"  value="<?php echo $this->lastName ?>"><br>
    <span class="error"><?php echo $this->lNameErr;?></span>
    <label for="email">e-mail:</label><br>
    <input type="text" id="email" name="email" value="<?php echo $this->email ?>"><br>
    <span class="error"><?php echo $this->emailErr;?></span>

    <label for="password">password:</label><br>
    <input type="text" id="password" name="password"><br>
    <span class="error"><?php echo $this->passErr;?></span>
    <label for="password">confirm password:</label><br>
    <input type="text" id="passwordConf" name="passwordConf"><br>
    <span class="error"><?php echo $this->passConfErr;?></span>
    <input type="submit" value="Submit">


</form>
</body>
</html>
