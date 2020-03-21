<?php

include_once('navbar.php');
?>
<!--Navbar Ends-->

<style>

  .heading{

    font-size: 18px;
    justify-content:right;
  }
  </style>
<!---BODY starts--------------------------------------------->



<br>
<div class="container">


  <div class="col s12 m8 offset-m2 l6 offset-l3">

<div class="row">

<br>
<div class="col s8 offset-s4 l2 m2 offset-l2">
        <img src="images/namaste.png" height="100px" width="100px" alt="emamta" class="responsive-img">
      </div>

<div class="col s12 l8 m8 ">
  <h4>Namaste from e-Mamta</h4>
</div>


</div><br>


    <div class="row">



      <div class="col s12 l4 m4">
        <img src="images/2.jpeg" style=" border-radius:19px;"  alt="emamta" class="responsive-img">
      </div>


      <div class="col s12 l8 m8">
      <div class="heading">
        
<p class="black-text"><b>1.</b>  Chances of getting infected at medical stores is the highest. Also WHO suggest keep washing and sanitizing your hands.<br></p>
      

<p class="black-text"><b>2.</b> So eMamta is here to help our country from <b>CORONA COVID-19</b>. Order here and we will deliver <b>Sanitizer</b> and mask to your home in 48 hours.<br></p>


 
<p class="black-text"><b>3.</b> Order senitizer here now without getting infected.<br></p>
<p class="black-text"><b>4.</b> Stay safe at home and pay online.<br></p>
 
</div>
        
            </div>


    </div><br>


    
    <div class="row">





      <div class="col s12 l7 m7 ">
<div class="heading">
      <p class="black-text">  <b>1.</b> We provide cheaper senitizer.<br></p>
</p class="black-text"><b>2.</b> 48 hours delivery time to your place.<br></p>
    <p class="black-text">    <b>3.</b> Just Order Right Now by filling below form.<br></p><br>
          
</div>
         <U> <h5>Deatails:-</h5></U>
     <p><b><h5> Sanitizer</h5></b></p>
        <p><b><h5>Price: 50/-</h5></b></p>
        <p><b><h5>Content:100ml</h5></b></p>
        <p><b><h5>As per WHO Guidelines</h5></b></p>
        <p><b><h5>Home Made</h5></b></p>
        <p><b><h5>Bottle can be different not product</h5></b></p>
      
        
      </div>


      <div class="col s12 l5 m5">
        <img src="images/product.jpg" style="border-radius:20px;" height="490px" width="250px" alt="emamta">
      </div>


    </div>
  </div><br>



  <U><h4 class="center">Enter Details For buying Sanitizer</h4><br></U>


  <div class="row">


    <form class="col s12" method="POST" action="useraction.php">


      <div class="row">

        <div class="input-field col s6">
          <input placeholder="Name" id="name" type="text" name="name" class="validate" required>
          <label for="name"> Name</label>
        </div>


        <div class="input-field col s6">
          <input placeholder="Email" id="email" type="email" name="email" class="validate" required>
          <label for="email">Email</label>
        </div>

      </div>

      <div class="row">

        <div class="input-field col s12">
          <input placeholder="Enter Address" id="address" type="text" name="address" class="validate" required>
          <label for="address">Address</label>
        </div>






      </div>


      <div class="row">

        <div class="input-field col s12">
          <input placeholder="Enter Area" id="landmark" type="text" name="landmark" class="validate" required>
          <label for="landmark">landmark</label>
        </div>






      </div>




      <div class="row">

        <div class="input-field col s6">
          <input value="Vadodara" id="disabled" name="city" type="text" class="validate" readonly>
          <label for="disabled">CITY</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="Paytm Number" id="phoneno" type="number" name="phoneno" class="validate" required>
          <label for="phone">Phone_no</label>
        </div>

      </div>


      <div class="row">
        <div class="input-field col s12">

          <select  name="noof" class="select"  id="noof" required>
            <option value=""   disabled selected>Choose No Of Sanitizer</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>

            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

          </select>
        </div>
</div>

<div class="row">

        <div class="input-field col s12">

          <select  name="area"  id="area" required>

            <option  value="" disabled selected  >Choose Your area</option>
            <option value="Gorwa">Gorwa</option>
            <option value="Gotri">Gotri</option>
            <option value="Subhanpura">Subhanpura</option>
            <option value="Alkapuri">Alkapuri</option>
            <option value="Akota">Akota</option>
            <option value="Waghodia">Waghodia</option>
            <option value="chhani Jakatnaka">Chhani Jakatnaka</option>
            <option value="Samta">Samta</option>
            <option value="Karelibaugh">Karelibaugh</option>
            <option value="Manjalpur">Manjalpur</option>
            <option value="Nizampura">Nizampura</option>
            <option value="MainCity">Maincity</option>

          </select>
        </div>





      </div>




      <button class="btn btn-wave pink" type="submit" name="submit">Buy now for Safety</button>

    </form>
  </div>



</div>
<!----BODYEnds-------------------------------------------->




<!--Footer Start-->

<br>
<?php
include_once('footer.php');
?>


<!--Footer Ends-->









<script>
  $('.sidenav').sidenav();
  $('select').formSelect();
</script>

</body>

</html>