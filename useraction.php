<?php

session_start();
include 'conn.php';
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");


if (isset($_POST['submit'])) {


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phoneno = $_POST['phoneno'];
  $address = $_POST['address'];
  $landmark = $_POST['landmark'];
  $city = $_POST['city'];
  $noof = $_POST['noof'];
  $area = $_POST['area'];



/* To maintain session */

$a=rand(1,10000);
$b= time() ;
$user_no=$b.''.$a;
$_SESSION['user_no']=$user_no;



/* To maintain session ends */




  $sql = "insert into sani  (name,email,phoneno,address,landmark,city,noof,area,user_no)
 values('$name','$email','$phoneno','$address','$landmark','$city','$noof','$area','$user_no')";


  if ($conn->query($sql) == TRUE) {

  


    include_once('navbar.php');


    echo '


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta name="GENERATOR" content="Evrsoft First Page">
<br>

<h3 class="center">Check out page</h3>


<div class="container">


<div class="row">


   
 <form class="col s12" method="post" action="paytm/pgRedirect.php" >


   <div class="row">

        <div class="input-field col s6">
		  <input placeholder="Name"  value=  ' .  $name . ' id="name" type="text" name="name" class="validate" readonly>
		  <label for="name"> Name</label>
       
      </div>

      
      <div class="input-field col s6">
		  <input placeholder="Email" value=' .  $email . ' id="email" type="email" name="email" class="validate" readonly>
		  <label for="email">Email</label>
         
      </div>

</div>

      <div class="row">

      <div class="input-field col s12">
  <input placeholder="Enter Address"  value=' .  $address . '   id="address" type="text" name="address"  readonly>
  <label for="address">Address</label>

  
</div>






      </div>


      <div class="row">

<div class="input-field col s12">
<input placeholder="Enter Area" value=' .  $landmark . '  id="landmark" type="text" name="landmark" class="validate" readonly>
<label for="landmark">landmark</label>

</div>






</div>




      <div class="row">

      <div class="input-field col s6">
          <input  value= ' .  $city . '    id="disabled"  name="city"  type="text" class="validate" readonly>
          <label for="disabled">CITY</label>
        </div>

<div class="input-field col s6">
  <input placeholder="Contact_no" value=' .  $phoneno . '  id="phoneno" type="number" name="phoneno" class="validate" readonly>
  <label for="phone">Phone_no</label>
  
</div>

</div>


<div class="row">
<div class="input-field col s6">
<input placeholder="Noof" value=' . $noof . '  id="noof"  type="number" name="noof" class="validate"  readonly>
<label for="phone">No Of Sanitizer</label>
  
</div>

<div class="input-field col s6">
<input placeholder="area" value=' .  $area . ' id="area"  type="text" name="area" class="validate" readonly>
<label for="phone">Area</label>
</div>

</div>


<div class="row">
<div class="input-field col s12">

<input placeholder="Amoont" value=' . $noof * 70 . '  id="amount"  type="number"  name="amount" class="validate"  readonly>
<label for="phone">Total Amount </label>
  

</div>
</div>



<div class="row">

<div class="input-field col s6">

      <input placeholder="OrderID"  id="ORDER_ID" tabindex="1"  value=' .  "ORDS" . rand(10000, 99999999) . ' maxlength="20" size="20" name="ORDER_ID" readonly>
      
<label class="active" for="orderid">OrderID</label>
      

  </div>

  <div class="input-field col s6">
  
  <input title="TXN_AMOUNT" tabindex="10"
    type="text"  value=' . $noof * 70 . ' name="TXN_AMOUNT" readonly>

    <label for="FinalAmount">Final Amount </label>



</div>

		
</div>
			
					<input type="hidden"   id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
			

					<input  type="hidden"   id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
			
					<input type="hidden"   id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
          
            
      
<div class="row">
<div class="input-field col s12">
  

<button class="btn btn-wave pink" id="submit" type="submit" name="submit">Checkout</button>
</div>
</div>
</div>





    </form>
  </div>

<script>


// document.getElementById("submit").disabled = true;
</script>

</div> 

</div>
';


    echo "</html>";

    include_once('footer.php');
  } else {
    echo "error to create database " . $conn->error;
  }

  $conn->close();
}
