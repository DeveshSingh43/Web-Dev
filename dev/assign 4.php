<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATHS</title>
    <style>
        h1{
            align="center";
        }
    </style>
</head>
<body background="images/designbig.jpg">
    <?php
    $a=$_POST['fnum'];
    $b=$_POST['snum'];
    $c=$a+$b;
    $d=$a-$b;
    $e=$a*$b;
    $f=$a/$b;

    echo "<h1> The addition is ".$c." </h1>";
    echo "<h1> The substraction is ".$d." </h1>";
    echo "<h1> The multiplication is ".$e."</h1>";
    echo "<h1> The division is ".$f. "</h1>";
    ?>
</body>
</html>