
<?php
$order_id = $_POST['ORDER_ID'];

include_once('conn.php');

session_start();
$_SESSION["user_no"];


$sql1="update sani set order_id=".$order_id." where user_no=".$_SESSION["user_no"]."  ";


if ($conn->query($sql1) == TRUE) {
echo"dome";

}

else{

echo $conn->error;

}

$conn->close();


?>
