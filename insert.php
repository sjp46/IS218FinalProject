<?php
// if(isset($_POST['submit']))
require('database.php');
include('form-handler.php')

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];
	$birthday=$_POST['birthday'];
	$gender=$_POST['gender'];


	$sql="INSERT INTO finalproject (fname,lname,email,password, number,birthday,gender) 
	VALUES ('$fname','$lname','$email','$password', '$number','$birthday','$gender')";


	$statement = $db->prepare($sql);
	$statement->execute();
	$statement->closeCursor();

?>



    
    
