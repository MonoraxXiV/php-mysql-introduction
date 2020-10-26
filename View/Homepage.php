<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
<h1>Index of students</h1>

<?php  foreach($students as $student):?>

    <tr>

        <td><?=$student['first_name'];?></td>
        <td><?=$student['last_name'];?></td>
        <td><?=$student['email'];?></td>
        <a href="profile.php?user=<?=$student['id'];?>"<td><?=$student['id'];?></td>
    </tr>
    <br>
<?php endforeach;?>
</body>
</html>
