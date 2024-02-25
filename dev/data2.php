<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFIRMATION SCREEN</title>
</head>
<body>
    <?php
    $a=$_POST['Id'];
    // $b=$_POST['pass'];
    $c=$_POST['DOB'];
    $d=$_POST['Phone'];
    $e=$_POST['E-mail'];

    echo "<h2> User Id:- ".$a." </h2>";
    // echo "<h2> Password:-  ".$b."</h2>";
    echo "<h2> Date of Birth:- ".$c."</h2>";
    echo "<h2> Telephone:- ".$d."</h2>";
    echo "<h2> E-mail:- ".$e."</h2>";
    ?>
</body>
</html>