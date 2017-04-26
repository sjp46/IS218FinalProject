<?php
	
	date_default_timezone_set('America/New_York');
	
	
	
	$hostname = 'sql1.njit.edu';
	$username = 'sjp46';
	$password = '6IX59hy8y';
	$database = 'sjp46';
	
	try{

	
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;njit.edu;dbname=$database", $username, $password);
        
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.html');
        exit();
    }
?>