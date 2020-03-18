<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("../conn.php"); 
 
 
 if(isset($_POST['submit']))
{ 
 
 $inUserId = $_POST["collegeId"];  
 $inPassword = $_POST["password"]; 

$a='123456';
$b='admin';

		
		if($inPassword==$a && $inUserId==$b){
			
	
	header("location: manage.php"); 
        }
		
		
		
		else{
			
		header("location:index.php");
		
		 
		}
	
		
		
		
		

    
} 


   ?>
 