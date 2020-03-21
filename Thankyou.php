
<?php
include_once('navbar.php');
include_once('conn.php');

session_start();
$conn->close();
session_unset(); 
session_destroy();
?>


<div class="container">

<h3 class="center">Thank You So much for your awareness</h3><br>
<h4 class="center">It would be even better if you can give your feedback</h4><br><br>

</div>


<?php
include_once('footer.php');
?>