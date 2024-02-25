<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULT</title>

</head>
<body background="images/designbig.jpg">
    <h1 align="center">
        RESULT
    </h1>
    <form align="center" action="assign.6.php" method="post">
        <label>NAME</label>
        <input type="text" required name="name" placeholder="Enter Your Name"><br><br>
        <label>MATHS</label>
        <input type="text" pattern="[0-9]+" required name="maths" placeholder="Enter Marks in MATHS"><br><br>
        <label>BEE</label>
        <input type="text" pattern="[0-9]+" required name="bee" placeholder="Enter Marks in BEE"><br><br>
        <label>PHYSICS</label>
        <input type="text" pattern="[0-9]+" required name="phy" placeholder="Enter Marks in PHYSICS"><br><br>
        <label>EM</label>
        <input type="text" pattern="[0-9]+" required name="em" placeholder="Enter Marks in EM"><br><br>
        <label>EPC</label>
        <input type="text" pattern="[0-9]+" required name="epc" placeholder="Enter Marks in EPC"><br><br>
        <input type="submit" value="Generate Result" >
    
           
</body>
</html>
