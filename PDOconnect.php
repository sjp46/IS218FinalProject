<?php
// if(isset($_POST['submit']))
require('database.php');
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$password=$_POST['password'];

$sql="INSERT INTO acc (fname,lname,email,phone,birthday,gender,password) VALUES (
'$fname','$lname','$email','$phone','$birthday','$gender','$password')";


$statement = $db->prepare($sql);
$statement->execute();
$statement->closeCursor();
}
?>
<!-- <?php
	require_once 'database.php';
	
	$query = 'SELECT * FROM finalproject ORDER BY id';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
?> -->


    
    
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>IS218</title>
</head>

<!-- the body section -->
<body>
		<main>
			
	    <?php foreach ($results as $oneLine) : ?>
	    <div>
	        <?php echo $oneLine['email']; ?>
	        <br /><br />
	    </div>
		<?php endforeach; ?>		
			
		</main>
</body>
</html>