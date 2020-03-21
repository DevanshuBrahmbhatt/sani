<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("../conn.php"); 
 
 
 if(isset($_POST['submit']))
{ 
 
 $inUserId = $_POST["collegeId"];  
 $inPassword = $_POST["password"]; 

$a='emamt@2020';
$b='delivery';

		
		if($inPassword==$a && $inUserId==$b){
			
	
	header("location: delivery.php"); 
        }
		
		
		
		else{
			
		header("location:index.php");
		
		 
		}
	
		
		
		
		

    
} 


   ?>
 