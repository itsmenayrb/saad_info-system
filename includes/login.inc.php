<?php

session_start();

if(isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$Username = mysqli_real_escape_string($conn, $_POST['username']);
	$Password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty check ulit kapag walang laman.

	if (empty($Username) || empty($Password)) {
		header("Location: ../login.php?login=empty");
		exit();
	}

	else {

		// Check naman kapag nasa database na yung info o nakapag-register na.

		$sql = "SELECT * FROM residents WHERE Username='$Username' OR Email='$Username'";
		$results = mysqli_query($conn, $sql);
		$resultsCheck = mysqli_num_rows($results);

		if($resultsCheck < 1){
			header("Location: ../login.php?login=error");
			exit();
		}

		else {

			//Pagccheck naman kung tama ba yung password
			if ($row = mysqli_fetch_assoc($results)) {
				//De-hashing the password
				$hashedPasswordCheck = password_verify($Password, $row['Password']);
				if ($hashedPasswordCheck == false) {
					header("Location: ../login.php?login=error");
					exit();
				}
				elseif ($hashedPasswordCheck == true) {
					//Log in the user here
					$_SESSION['Username'] = $row['Username'];
					$_SESSION['user_ID'] = $row['user_ID'];
					$_SESSION['Email'] = $row['Email'];
					$_SESSION['FirstName'] = $row['Username'];
					$_SESSION['LastName'] = $row['LastName'];

					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
}
else {
		header("Location: ../login.php?login=error");
		exit();
}