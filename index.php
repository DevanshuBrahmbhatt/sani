<?php

include_once('navbar.php');
?>
<!--Navbar Ends-->


<!---BODY starts--------------------------------------------->


<br>
<div class="container">



  <div class="col s12 m8 offset-m2 l6 offset-l3">




    <div class="row">



      <div class="col s12 l4 m4">
        <img src="images/1.jpg" alt="" class="responsive-img">
      </div>&nbsp


      <div class="col s12 l8 m8">
        <span class="black-text">
          This is a square image. Add the "circle" class to it to make it appear circular.
          This is a square image. Add the "circle" class to it to make it appear circular.
          This is a square image. Add the "circle" class to it to make it appear circular.
          This is a square image. Add the "circle" class to it to make it appear circular.
          This is a square image. Add the "circle" class to it to make it appear circular.
        </span>
      </div>


    </div>
  </div>



  <h3 class="center">Enter Details</h3><br>


  <div class="row">


    <form class="col s12" method="POST" action="useraction.php">


      <div class="row">

        <div class="input-field col s6">
          <input placeholder="Name" id="name" type="text" name="name" class="validate">
          <label for="name"> Name</label>
        </div>


        <div class="input-field col s6">
          <input placeholder="Email" id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>

      </div>

      <div class="row">

        <div class="input-field col s12">
          <input placeholder="Enter Address" id="address" type="text" name="address" class="validate">
          <label for="address">Address</label>
        </div>






      </div>


      <div class="row">

        <div class="input-field col s12">
          <input placeholder="Enter Area" id="landmark" type="text" name="landmark" class="validate">
          <label for="landmark">landmark</label>
        </div>






      </div>




      <div class="row">

        <div class="input-field col s6">
          <input value="Vadodara" id="disabled" name="city" type="text" class="validate" readonly>
          <label for="disabled">CITY</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="Contact_no" id="phoneno" type="number" name="phoneno" class="validate">
          <label for="phone">Phone_no</label>
        </div>

      </div>


      <div class="row">
        <div class="input-field col s6">

          <select name="noof" id="noof">
            <option value="" disabled selected>Choose No of Sanitizer</option>
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

        <div class="input-field col s6">

          <select name="area" id="area">
            <option value="" disabled selected>Choose Your area</option>
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




      <button class="btn btn-wave" type="submit" name="submit">Submit</button>

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