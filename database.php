<?php
	
	date_default_timezone_set('America/New_York');
	
	
	
	$hostname = 'sql1.njit.edu';
	$username = 'sjp46';
	$password = '6IX59hy8y';
	$database = 'sjp46';
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];

	//create connection
	$conn = new mysqli(sql1.njit.edu, sjp46, 6IX59hy8y, sjp46);

	//check connection
	if ($conn->connection_error){
		die("Connection Failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO Final Project (First Name, Last Name, Email (Login), Phone Number, Birthday, Gender)
	VALUES ('$fname, $lname, $email, $password, $number, $birthday, $gender')";

	if ($conn->query($sql) === TRUE) {
		echo "Thank you";
	}
	else {
		echo "error: " .$sql . "<br>" . $conn->error;
	}
	
	$conn-close();

	try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=mysql1.njit.edu;dbname=$database", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.html');
        exit();
    }
?>