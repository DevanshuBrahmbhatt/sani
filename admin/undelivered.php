<?php
include_once('navbar.php');
include_once('../conn.php');



$sql="select *from sani where payment=1 and delivery=0";
$dataProduct=$conn->query($sql);

echo '

<div class="container">

<h3>Undeliver Orders<br> </h3>
<table class="striped">
<thead>
  <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone No</th>
      <th>Address</th>
      <th>Payment</th>
      <th>Delivery</th>
  </tr>
</thead>
';

if($dataProduct!=null){
		
    foreach($dataProduct as $d=>$c){



echo "<tbody> ";
  echo "<tr>";
  echo"   <td> " .$c['id'].  " </td>";
 echo"   <td> " .$c['name'].  " </td>";
 echo" <td> " .$c['phoneno'].  " </td>";
 echo"<td>  " .$c['address'].  " </td>";
 echo"<td>  " .$c['payment'].  " </td>";
 echo"<td>  " .$c['delivery'].  " </td>";
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