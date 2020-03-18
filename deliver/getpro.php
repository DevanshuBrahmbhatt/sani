<?php

include_once('../conn.php');


if (isset($_GET['user_no'])) {
    $user_no = $_GET['user_no'];



$sql="update sani set delivery=1 where user_no='$user_no'";

if  ($conn->query($sql)==true){

    header('Location:thankde.php');


}

else{

    echo "error to create database ". $conn->error;
}

$conn->close();


}





?>