<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFIRMATION SCREEN</title>
</head>
    <body>
       <?php
           $a=$_POST['Id'];
           $d=$_POST['Phone'];
           $e=$_POST['email'];

         echo "<h2> Thank you ".$a." </h2>";
         echo "<h2> U will be notified at ".$d." once Accepted</h2>";
        ?>
    </body>
</html>