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
				<?php 
					if(!isset($_GET['login'])){
						
					}
					else{
						$loginCheck = $_GET['login'];
						if($loginCheck == "error"){
							echo "<div class='error_report'><p>Incorrect username or password!</p></div>";
						}
					}
				?>
				<div id="login-submit-button">
					<input type="submit" name="submit" id="submit" value="Login"/>
				</div>
				<div id="login-register-link">
					Not a member? <a href="register.php">Sign Up</a>
				</div>
				<div id="login-account-reset-link">
					<a href="forgotpassword.php">Forgot Password.</a>
				</div>	
			</form>
		</div>
	</div>
<?php
	include 'footer.php';
?>