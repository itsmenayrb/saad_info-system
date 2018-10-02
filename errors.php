<?php

if(!isset($_GET['signup'])){
	
}
else{
	$registerCheck = $_GET['signup'];
	if($registerCheck == "invalid"){
		echo "<div class='error_report'><p>You have entered invalid characters!</p></div>";
	}
	elseif($registerCheck == "email"){
		echo "<div class='error_report'><p>Invalid email address!</p></div>";
	}
	elseif($registerCheck == "emailexist"){
		echo "<div class='error_report'><p>Email address is already exist!</p></div>";
	}
	elseif($registerCheck == "uerror"){
		echo "<div class='error_report'><p>Username should be at least five characters!</p></div>";
	}
	elseif($registerCheck == "usernametaken"){
		echo "<div class='error_report'><p>Username is already exist!</p></div>";
	}
	elseif($registerCheck == "perror"){
		echo "<div class='error_report'><p>Password should be at least eight characters!</p></div>";
	}
	elseif($registerCheck == "pwderror"){
		echo "<div class='error_report'><p>Password do not match!</p></div>";
	}
	elseif($registerCheck == "terms"){
		echo "<div class='error_report'><p>Please indicate that you have read the Terms and</p><p> Conditions.</p></div>";
	}
	elseif($registerCheck == "success"){
		echo "<div class='success_report'><p>Registered Successfully!</p></div>";
	}	
}
?>