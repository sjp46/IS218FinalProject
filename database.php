<?php
	
	date_default_timezone_set('America/New_York');
	
	
	
	$hostname = 'localhost';
	$username = 'root';
	$password = 'mysql';
	$database = 'sjp46';
	
	try{

	
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;localhost;dbname=$database", $username, $password);
        
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.html');
        exit();
    }
?>