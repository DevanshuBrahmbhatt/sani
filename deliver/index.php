<?php
include_once('navbar.php');
?>

<div class="container">

<form  action="Loginaction.php" method="post"  class=" form col s12">


    


    <div class="z-depth-2 #fafafa grey lighten-5"> 


        <div class="container">


        
            <div class="container-fluid">

            <h3  id="heading"  class="center" style="color:#e85a50"> <U><br>Log In For Delivery</U> </h3>
        </div>
        
        
<!-------------------------first row-------------------------------------------->


<div class="row">	
<div class="input-field col s12">
<i class="material-icons prefix">person</i>
<input  name="collegeId"  placeholder="admin_Id"  id="collegeId" type="text"  title=" characters only" required>

</div>

</div>

<div class="row">

<div class="input-field col s12">
<i class="material-icons prefix">enhanced_encryption</i>
<input name="password" id="password" type="password"  placeholder="Password"    pattern=".{6,}" title="Six or more characters" required>

</div>

</div>

<div class="row">

<div class="input-field col s6 ">
    <button class="btn #d84315 deep-orange darken-3"  type="submit"
    class="black-text text-black" id="postsubmit"  name="submit">Log In
    <i class="material-icons right">send</i>
    </button>
</div>


</div>



<!-------------------------8 row-------------------------------------------->

</div>

</div>

</form>
</div>

<?php
include_once('../footer.php');
?>