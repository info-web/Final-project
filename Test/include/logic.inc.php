<?php
include('connections.php');
session_start();
?>
<?php

// Inserting a new row
if(!empty($_POST['time_tot']) && !empty($_POST['time_day'])){
	$time_tot = $_POST['time_tot'];
	$time_day = $_POST['time_day'];
	$level = $_POST['level'];
// if ($level == "beg") {
//     echo 'Correct';
// }
// else {
//     echo 'Incorrect';
// }
	//define the query
	//$query = "INSERT INTO boat(bid, bname, color) VALUES('$username','$password','$password')";
	$query = "SELECT course from surprise WHERE diff_lvl = '$level' AND tot_days = '$time_day' AND tot_time = '$time_tot'";
	$result = pg_query($connections, $query);

	// if there was some sort of a query execution problem
	if(!$result) {
		header("Location: logic_page.php?error=Insert%20Error!");
	}
	// Insert was successful
	else {
		header("Location: logic_page.php?success=You%20are%20successfully%20shared%20the%20data!");
	}
}
else { // they left a box empty
	header("Location: logic_page.php?error=Fields%20required!");
}
?>
