<?php
	include 'header.php';
?>
<div class="main-container">
		<div class="pwdreset-container">
				<p> Reset Password </p>
				<form action="includes/forgotpassword.inc.php" method="post">
					<div>
						<label>Choose how do you want to reset your password</label>
					</div>
					<div class="button dropdown">
						<select id="resetselector">
							<option value="email">Via email</option>
							<option value="secquestion" selected>Via security question</option>
						</select>
					</div>
					<div class="output" id="reset_options">
						<div id="email" class="thru email">
							<input type="text" name="email" id="email" autofocus="true" placeholder="Enter your email address" class="emailforresetpwd" required/>
							<?php
							if(!isset($_GET['reset'])){

							}
							else{
								$resetCheck = $_GET['reset'];
								if($resetCheck == "error"){
									echo "<div class='error_report'><p>Invalid email address!</p></div>";
								}
								elseif($resetCheck =="noemail"){
									echo "<div class='error_report'><p>The email address is not yet registered!</p></div>";
								}
							}
						?>
							<input type="submit" id="submit" name="send" value="Send"/>
						</div>
						<div id="secquestion" class="thru secquestion">
							<input type="text" name="username" id="username" placeholder="Username" autofocus="true" required/>
							<input type="text" name="securityquestion1" id="securityquestion1" placeholder="Answer 1" required/>
							<input type="text" name="securityquestion2" id="securityquestion2" placeholder="Answer 2" required/>
							<input type="password" name="password" id="password" placeholder="Type your new password." required/>
							<input type="password" name="cpassword" id="cpassword" placeholder="Retype your new password." required/>
							<input type="submit" name="resetpwd" id="submit" value="Reset Password"/>
						</div>
					</div>
					<div id="login-register-link">
						<br>Not a member? <a href="register.php">Sign Up</a>
					</div>
					<div id="login-account-reset-link">
						Click here to login. <a href="login.php">Login</a>
					</div>			
				</form>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			$('#resetselector').change(function(){
				$('.thru').hide();
				$('#' + $(this).val()).show();
			});
		});
	</script>
<?php
include ('footer.php');
?>