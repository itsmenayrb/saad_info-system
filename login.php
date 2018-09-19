<?php
	include 'header.php';
?>
	<div class="main-container">
		<div class="login-container">
			<p id="login-page-title"> Login </p>
			<form id="login-form" action="includes/login.inc.php" method="post">
				<div id="login-username-input">
					<span id="username_login_checked"></span>
					<input type="text" name="username" id="username" placeholder="Username or Email" required/>
				</div>
				<div id="login-password-input">
					<span id="password_login_checked"></span>
					<input type="password" name="password" id="password" placeholder="Password" required/>
				</div>
				<div id="login-submit-button">
					<input type="submit" name="submit" id="submit" value="Login"/>
				</div>
				<div id="login-register-link">
					Not a member? <a href="register.php">Sign Up</a>
				</div>
				<div id="login-account-reset-link">
					<br><a href="forgotpassword.php">Forgot Password.</a>
				</div>			
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>