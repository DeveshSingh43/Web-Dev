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
$k=date('Y-m-d');

 $sql="INSERT INTO result (NAME,MATHS,BEE,PHYSICS,EM,EPC,PERCENTAGE,RESULT,CREATED_DATE)VALUES('POOJA',20,30,40,20,35,40,'FAIL','$k')";

 if($conn->query($sql)==TRUE){
    echo "NEW RECORD CREATED SUCCESSFULLY";
}
else{
    echo "Error :" .$sql. "<br>".$conn->error;
}




?>