
<?php


$localhost="localhost";
$user="root";
$password="";
$dbname="sani";




$conn=new mysqli($localhost,$user,$password,$dbname);


if($conn->connect_error)
{
    
    die("connection failed".$conn->connect_error);
}

 else {
    
//echo "connected suceesfully";
     
 }

?>

