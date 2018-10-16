<?php
include 'dbh.inc.php';

$Username ="";
$Password ="";

$errors = array();

if(isset($_POST['submit'])) {

	$Username = checkInput($_POST['username']);
	$Password = checkInput($_POST['password']);

	//Error handlers
	// Check naman kapag nasa database na yung info o nakapag-register na.

	$sql = "SELECT * FROM users WHERE Username='$Username' OR Email='$Username'";
	$results = mysqli_query($conn, $sql);
	$resultsCheck = mysqli_num_rows($results);

	if($resultsCheck < 1){
		array_push($errors,"Incorrect username or password!");
	}

	else {
		//Pagccheck naman kung tama ba yung password
		if ($row = mysqli_fetch_assoc($results)) {
			//De-hashing the password
			$hashedPasswordCheck = password_verify($Password, $row['Password']);
			if ($hashedPasswordCheck == false) {
				array_push($errors, "Something went wrong. Please try again later.");
				exit();
			}
			elseif ($hashedPasswordCheck == true) {
				//Log in the user here
				$_SESSION['Username'] = $row['Username'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['Email'] = $row['Email'];
				header("Location: ../index.php");
				exit();
			}
		}
	}
}
?>