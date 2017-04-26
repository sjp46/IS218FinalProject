<html>
<body>

Welcome 

<?php 
// include('index.html');
	if (isset($_POST["fname"])){
		echo $_POST["fname"];
	}
	else {
		echo "(you didn't provide a name)";
	}
	
		
?><br>
Your email address is: 
	<?php
	echo $_GET["email"];
	echo filter_input(INPUT_GET, 'email');
	?>

</body>
</html>