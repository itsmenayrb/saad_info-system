<?php session_start(); ?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Welcome - Barangay Salitran II</title>

		<!--CSS Styles -->
		<link href="style.css" rel="stylesheet">
		<script type="text/javascript" src="assets/js/jquery-2.2.1.js"></script>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="aboutus.php">About us</a></li>
		      </ul>
		
		      <ul class="nav navbar-nav navbar-right">
						<?php
							if (isset($_SESSION['user_ID'])) {
								echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
							}
							else{
								echo '<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Sign Up</a></li>';
							}
						?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</head>



	<body>