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
				<div>
					<input type="submit" name="submit" id="submit" value="Register"/>
				</div>
				<div>
					Already a member? <a href="login.php">Login</a>
				</div>
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>