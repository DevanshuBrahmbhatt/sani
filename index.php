<?php

include_once('navbar.php');
?>
<!--Navbar Ends-->


<!---BODY starts--------------------------------------------->



<br>
<div class="container">



  <div class="col s12 m8 offset-m2 l6 offset-l3">




    <div class="row">



      <div class="col s12 l5 m5">
        <img src="images/2.jpeg" alt="" class="responsive-img">
      </div>&nbsp


      <div class="col s12 l7 m7">
        <span class=" flow-text black-text">
          This is a square image. Add the "circle" class to it to make it appear circular.
          This is a square image. Add the "circle" class to it to make it appear circular.

        </span>
      </div>


    </div>


    
    <div class="row">





      <div class="col s12 l3 m6 offset-l3">
        <span class="black-text">

        <h4> Sanitizer</h4>
        <h4>Price: 25/-</h4>
        </span>
      </div>


      <div class="col s12 l6 m6">
        <img src="images/1.jpg" alt="" class="responsive-img">
      </div>&nbsp


    </div>
  </div>



  <h3 class="center">Enter Details</h3><br>


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
            <option value="chhani">Chhani</option>
            <option value="Samta">Samta</option>
            <option value="Karelibaugh">Karelibaugh</option>
            <option value="Manjalpur">Manjalpur</option>
            <option value="Nizampura">Nizampura</option>
            <option value="MainCity">Maincity</option>

          </select>
        </div>





      </div>




      <button class="btn btn-wave pink" type="submit" name="submit">Move one step towards safety</button>

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