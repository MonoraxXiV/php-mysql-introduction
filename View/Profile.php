<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body style="background-color: plum">
<h2 class="text-center mb-3 bg-light ml-5 mr-5 mt-3 p-2"><?php echo $selection['first_name']." ". $selection['last_name'] ?>'s Profile</h2>



<div class="card ml-5 mr-5 shadow-lg p-1">
    <img class="card-img-top w-25 h-25" src="<?php echo $catImage?>" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title"><?php echo $selection['first_name']." ". $selection['last_name'] ?></h4>
        <p class="card-text">
            student id: <?php echo $selection['id'].'<br>' ?>
            e-mail: <?php echo $selection['email'].'<br>' ?>
            Account created on: <?php echo $selection['created_at'] ?>
        </p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
