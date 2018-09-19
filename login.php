<?php
	include 'header.php';
?>
	<div class="main-container">
		<div class="login-container">
			<p> Login </p>
			<form action="includes/login.inc.php" method="post">
				<div>
					<span id="username_login_checked"></span>
					<input type="text" name="username" id="username" placeholder="Username or Email" onkeyup="check_username_login()" />
				</div>
				<div>
					<span id="password_login_checked"></span>
					<input type="password" name="password" id="password" placeholder="Password"/>
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
				<div class="row">
                    <div class="col-sm-6 col-sm-offset-3 social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
	                        <a class="btn btn-link-1 btn-link-1-facebook" href="#">
	                        	<i class="fa fa-facebook"></i> Facebook
	                        </a>
	                        <a class="btn btn-link-1 btn-link-1-twitter" href="#">
	                        	<i class="fa fa-twitter"></i> Twitter
	                        </a>
	                        <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        	<i class="fa fa-google-plus"></i> Google Plus
	                        </a>
                        </div>
                    </div>
                </div>
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>