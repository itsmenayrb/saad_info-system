<?php
	include 'header.php';
?>
	<div class="main-container">
		<div class="registration-container">
			<p> Register </p>
			<form action="includes/register.inc.php" method="post">
				<div>
					<input type="text" name="fname" id="fname" placeholder="First Name" onkeyup="checkfname();" required/>
				</div>
				<div>
					<input type="text" name="lname" id="lname" placeholder="Last Name" onkeyup="checklname();" required/>
				</div>
				<div>
					<input type="text" name="email" id="email" placeholder="Email" onkeyup="checkemail();" required/>
				</div>
				<div>
					<input type="text" name="username" id="username" placeholder="Username" onkeyup="checkusername();" required/>
				</div>
				<div>
					<input type="password" name="password" id="password" placeholder="Password" onkeyup="checkpassword();" required/>
				</div>
				<div>
					<input type="password" name="cpassword" id="cpassword" placeholder="Retype Password" onkeyup="checkcpassword();" required/>
				</div>
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
				<div id="terms">
					<input type="checkbox" id="checkboxTerms" name="checkboxTerms">
					I accept the <a href="#"><u>Terms and Conditions</u></a>.
				</div>
				<div>
					<input type="submit" name="submit" id="submit" value="Register"/>
				</div>
				<div id="login-on-register-page-link">
					<br>Already a member? <a href="login.php">Login</a>
				</div>
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>