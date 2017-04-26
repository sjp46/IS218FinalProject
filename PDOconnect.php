<?php
// if(isset($_POST['submit']))
require('database.php');
include('form-handler.html')
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$number=$_POST['number'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$password=$_POST['password'];

$sql="INSERT INTO finalproject (fname,lname,email,number,birthday,gender,password) VALUES (
'$fname','$lname','$email','$number','$birthday','$gender','$password')";


$statement = $db->prepare($sql);
$statement->execute();
$statement->closeCursor();
}
?>



    
    
