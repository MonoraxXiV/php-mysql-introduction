<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
<h1>Welcome back to GenericSite, please log in.</h1>
<form  method="post">
<label for="email">e-mail:</label><br>
<input type="text" id="email" name="email"><br>
    <span class="error"><?php echo $this->emailErr;?></span>
<label for="password">password:</label><br>
    <!-- need to find a way to not show previously entered words into the password box and to display as dots -->
<input type="text" id="password" name="password"><br>
    <span class="error"><?php echo $this->passErr;?></span>
<input type="submit" value="Submit">
    <!-- put in a link that actually works or put it in the if statements when switching -->
    <p>don't have an account yet? <a href="register.php">Register here</a></p>
</form>
</body>
</html>
