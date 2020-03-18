<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("../conn.php"); 
 
 
 if(isset($_POST['submit']))
{ 
 
 $inUserId = $_POST["collegeId"];  
 $inPassword = $_POST["password"]; 

$a='1234567';
$b='deliver';

		
		if($inPassword==$a && $inUserId==$b){
			
	
	header("location: delivery.php"); 
        }
		
		
		
		else{
			
		header("location:index.php");
		
		 
		}
	
		
		
		
		

    
} 


   ?>
 