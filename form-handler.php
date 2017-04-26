<?php
	require_once 'database.php';
	
	$query = 'SELECT * FROM finalproject ORDER BY id';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
?>
<html>
<body>

<br>


</body>
</html>