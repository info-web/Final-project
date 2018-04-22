<?php
include('connections.php');
?>
<?php

// Inserting a new row
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirmPassword']) && $_POST['password'] == $_POST['confirmPassword']) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	//define the query
	//$query = "INSERT INTO boat(bid, bname, color) VALUES('$username','$password','$password')";
	$query = "INSERT INTO users(username) VALUES('$username')";
	$result = pg_query($connections, $query);
	
	// if there was some sort of a query execution problem
	if(!$result) {
		header("Location: sign_up.php?error=Insert%20Error!");
	}
	// Insert was successful
	else {
		header("Location: sign_up.php?success=You%20are%20successfully%20signed%20up!");
	}
}
else { // they left a box empty
	header("Location: sign_up.php?error=Fields%20required!");
}
?>