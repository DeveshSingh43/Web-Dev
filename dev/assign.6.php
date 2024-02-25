<?php 
$servername="localhost";
$username="root";
$password="";
$database="web dev.";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    echo "Connection Failed<br>";
    die;
}
else{
    echo "Connection Successful<br>";
}
$a=$_POST["name"];
$b=$_POST["maths"];
$c=$_POST["bee"];
$d=$_POST["phy"];
$e=$_POST["em"];
$f=$_POST["epc"];
$g=$b+$c+$d+$e+$f;
$h=$g/5;

if($h>40){
    $i="PASS";
}
else{
    $i="FAIL";
}

 $DATE=date('d-m-Y');

 //$sql="INSERT INTO result (NAME,MATHS,BEE,PHYSICS,EM,EPC,PERCENTAGE,RESULT,CREATED_DATE)VALUES('NOOBDA',20,30,40,20,35,40,'FAIL','$DATE')";
 $sql="INSERT INTO result (NAME,MATHS,BEE,PHYSICS,EM,EPC,PERCENTAGE,RESULT,CREATED_DATE)VALUES('$a',$b,$c,$d,$e,$f,'$h','$i','$DATE')";

if($conn->query($sql)==TRUE){
    echo "NEW RECORD CREATED SUCCESSFULLY";
}
else{
    echo "Error :" .$sql. "<br>".$conn->error;
}




?>