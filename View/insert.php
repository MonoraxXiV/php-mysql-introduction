<?php
session_start();
$firstName=$lastName=$email="";
$fNameErr=$lNameErr=$emailErr="";
$date= new DateTime();
$id=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fname'])){
        $fNameErr="First name is required".'<br>';
    }else {
        $firstName=$_POST['fname'];
    }
    if (empty($_POST['lname'])){
        $lNameErr="Last name is required".'<br>';
    }else {
        $lastName=$_POST['lname'];
    }

   if (isset($_POST['email'])){
        $email=$_POST['email'];
        filter_var($email, FILTER_VALIDATE_EMAIL) ;
    }else {

        $emailErr="E-mail adress is invalid".'<br>';
    }

    if ($fNameErr=="" && $lNameErr==""&&$emailErr==""){
        //Post code to database.
            $connector= new Connection();
            $pdo=$connector->getPdo();

            $handle=$pdo->prepare("INSERT INTO student VALUES (:id, :first_name, :last_name, :email, :created_at )");
            $handle->bindValue(':first_name', $firstName);
            $handle->bindValue(':last_name', $lastName);
            $handle->bindValue(':email', $email);
            $handle->bindValue(':created_at',$date->format('Y-m-d H:i:s'));
            $handle->bindValue(':id',$id);
            $handle->execute();

        }


}
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
