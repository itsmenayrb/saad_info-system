<?php

session_start();

?>
<!DOCTYPE html>

<html lang="eng">

	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Welcome - Barangay Salitran II</title>

		<!--CSS Styles -->
		<link href="style.css" rel="stylesheet"/>
		<script type="text/javascript" src="assets/js/jquery-2.2.1.js"></script>
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

		<header>
			<div class="main-wrapper">
				<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="aboutus.php">About us</a></li>
				</ul>
				
				<div class="nav-login">
					<?php
						if (isset($_SESSION['user_ID'])) {
							echo '<form action="includes/logout.inc.php" method="POST" class="logout">
							<input type="submit" name="submit" class="log-out" value="Logout"/>
							</form>';
						}
						else{
							echo '<a href="login.php">Login</a>
							<a href="register.php">Sign Up</a>';
						}
					?>		
				</div>
				</nav>
			</div>
		
		</header>
	</head>

	<body>