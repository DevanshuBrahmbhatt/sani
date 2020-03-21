<?php

$b =$_GET['id'];

if(isset($b)==true){


include_once('navbar.php');
include_once('../conn.php');
}

else{

  echo "sorry next time";
}


$sql="select *from sani where payment=1 and delivery=0";
$dataProduct=$conn->query($sql);

echo '

<div class="container">

<h3>Undeliver Orders<br> </h3>
<table class="striped">
<thead>
  <tr>
      <th>Name</th>
      <th>Phone No</th>
      <th>Address</th>
      <th>Payment</th>
      <th>Delivery</th>
      <th>Status</th>
  </tr>
</thead>
';

if($dataProduct!=null){
		
    foreach($dataProduct as $d=>$c){



echo "<tbody> ";
  echo "<tr>";
 echo"   <td> " .$c['name'].  " </td>";
 echo" <td> " .$c['phoneno'].  " </td>";
 echo"<td>  " .$c['address'].  " </td>";
 echo"<td>  " .$c['payment'].  " </td>";
 echo"<td>  " .$c['delivery'].  " </td>";
 echo "<td>     <a href= 'getpro.php?user_no=$c[user_no]   '   class='btn btn-wave pink'>Update</a> </td> "  ;
	
 echo"</tr>";
  
 echo" </tbody>";


    }

}

echo'
</table>

</div><br>
';



include_once('../footer.php');

$conn->close();

?>