<?php

session_start();

echo  $_SESSION["user_no"];

include '../conn.php';


header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");


require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";

$sql="update sani set payment='1' where user_no= '" . $_SESSION["user_no"] . "' ";




while($conn->query($sql) == FALSE);



if ($conn->query($sql) == TRUE) {

	echo "sucees";

	echo" <h3>Thank You So much for your awareness</h3><br>
	<h4>It would be even better if you can give your feedback</h4><br><br> ";
	
}
	


else{

echo  "We have recevied your payment but due to technical reasons it is not updating in our Database we will fix it soon.Please take screenshot of this page. Thanks for your time";
$conn->error;

}

echo "<script>window.location.href='../Thankyou.php'</script>";

	}


	else {


		echo "<b>Transaction status is failure</b>" . "<br/>";
		echo "<b>We have't recevied your Payment So please Try after some time</b>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	
}




?>