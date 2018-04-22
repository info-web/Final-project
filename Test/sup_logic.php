<?php
include('connections.php');
session_start();
?>
<?php

// Inserting a new row
if(isset($_POST['time_tot']) && isset($_POST['time_day']) && isset($_POST['level'])){
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
	$query = "SELECT course from surprise WHERE diff_lvl = " .$level. " AND tot_day = " .$time_day. " AND tot_time = " .$time_tot;
	$result = pg_query($connections, $query);
	$row = pg_fetch_row($result);
		$cour=$row[0];
		echo "value of " .$cour;
	$h1 = "HTML";
	// if there was some sort of a query execution problem
	if(!$result) {
		header("Location: logic_page.php?error=Insert%20Error!");
	}
	//Insert was successful
	else {
		switch($cour){
			case ($cour == $h1):{
				header("Location:opt1.html");
				exit();
			}
			case ($cour == "CSS"):{
				header("Location:opt2.html");
				exit();
			}
			case ($cour == "Javascript"):{
				header("Location:opt3.html");
				exit();
			}
			case ($cour == "Java"):{
				header("Location:opt4.html");
				exit();
			}
			case ($cour == "PHP"):{
				header("Location:opt5.html");
				exit();
			}
			case ($cour == "SQL"):{
				header("Location:opt6.html");
				exit();
			}
			case ($cour == "Python"):{
				header("Location:opt7.html");
				exit();
			}
			case ($cour == "C++"):{
				header("Location:opt8.html");
				exit();
			}
			case ($cour == "ML"):{
				header("Location:opt9.html");
				exit();
			}
			case ($cour == "DL"):{
				header("Location:opt10.html");
				exit();
			}
			case ($cour == "Bootstrap"):{
				header("Location:opt11.html");
				exit();
			}
			case ($cour == "Basicprog"):{
				header("Location:opt12.html");
				exit();
			}
		}
	}
}
//logic_page.php?success=You%20are%20successfully%20shared%20the%20data!
else { // they left a box empty
	header("Location: logic_page.php?error=Fields%20required!");
}
?>
