<?php
	include 'header.php';
?>
	<div class="main-container">
		<div class="login-container">
			<p> Login </p>
			<form action="includes/login.inc.php" method="post">
				<div>
					<input type="text" name="username" id="username" placeholder="Username or Email" required/>
				</div>
				<div>
					<input type="password" name="password" id="password" placeholder="Password" required/>
				</div>
				<div>
					<input type="submit" name="submit" id="submit" value="Login"/>
				</div>
				<div>
					Not a member? <a href="register.php">Sign Up</a>
				</div>
				<div>
					<br><a href="forgotpassword.php">Forgot Password.</a>
				</div>			
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>