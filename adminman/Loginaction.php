<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("../conn.php"); 
 
 session_start();
 
 if(isset($_POST['submit']))
{ 
 
 $inUserId = $_POST["collegeId"];  
 $inPassword = $_POST["password"]; 

$a='emamta@1104';
$b='adminman';
$_SESSION['pass']=$a;

		
		if($inPassword==$a && $inUserId==$b){
			
	
	header("location:manage.php"); 
        }
		
		
		
		else{
			
		header("location:index.php");
		
		 
		}
	
		
		
		
		

    
} 


   ?>
 