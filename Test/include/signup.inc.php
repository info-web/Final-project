<?php
		if(isset($_POST['submit'])){
			include_once 'dbh.inc.php';
		//adding connection 

			$first = mysqli_real_escape_string($conn, $_POST['first']);
			$last = mysqli_real_escape_string($conn, $_POST['last']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$uid = mysqli_real_escape_string($conn, $_POST['uid']);
			$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		// Error Handlers
		//checking the empty spaces

		if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
			//echo 'hi there';
			header("Location: ../signup.php?signup=empty");
			exit();
		}
		else {
			//check if the input characters are valid or not
			if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
				header("Location: ../signup.php?signup=invalid");
				exit();
			}else{
				//checking email entered is valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../signup.php?signup=invalid_email");
					exit();
				}
				else{
					$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0){
						header("Location: ../signup.php?signup=olduser");
						exit();
					}
					else{
						//hashing the password
						$hashed = password_hash($pwd, PASSWORD_DEFAULT);
						//insert the user into the db
						$sql = "INSERT  INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last',' $email', '$uid', '$hashed');";
						//connecting the db and the col names
						mysqli_query($conn, $sql);
						header("Location: ../signup.php?signup=success");
						exit();
					}
				}
			}

		}
	}
	else {
		header("Location: ../signup.php");
		exit();
	}

?>
