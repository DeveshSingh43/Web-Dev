<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULT</title>
</head>
<body background=images/designbig.jpg>
<?php
        $a=$_POST['name'];  
        $b=$_POST['maths'];
        $c=$_POST['bee'];
        $d=$_POST['phy'];
        $e=$_POST['em'];
        $f=$_POST['epc'];
        $g=$b+$c+$d+$e+$f;
        $h=$g/5;
        if($h>40){
            $g="<h4 style= 'background-color:green'>PASS</h4>";
        }
        else{
            $g="<h4 style= 'background-color:red'>FAIL</h4>";
        };
        if($h>44){
            echo "<h1>CONGRATULATIONS!!!</h1>";
        }

        echo "<table align=center width=10 border=black><tbody>
        <tr>
            <th>NAME</th>
            <th>MATHS</th>
            <th>BEE</th>
            <th>PHYSICS</th>
            <th>EM</th>
            <th>EPC</th>
            <th>PERCENT</th>
            <th>RESULT</th>
        </tr>
        <tr>
            <td>".$a."</td>
            <td>".$b."</td>
            <td>".$c."</td>
            <td>".$d."</td>
            <td>".$e."</td>
            <td>".$f."</td>
            <td>".$h."%</td>
            <td>".$g."</td>
        </tr>
       </tbody></table>";
     ?> 
     
    
</body>
</html>
