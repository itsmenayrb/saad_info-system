<?php

if(isset($_POST['submit'])) {

	//log-out yung user
	session_start();
	session_unset();
	session_destroy();

	header("Location: ../index.php");
	exit();
	
}