<?php
include ('header.php');
?>

<div class="main-container">
		<div class="login-container">
			<p> Reset Password </p>
			<form action="includes/forgotpassword.inc.php" method="post">
				<div>
                    <label>Please provide the answer to your Security Questions</label>
					<input type="text" name="securityquestion1" id="securityquestion1" placeholder="Answer 1" required/>
				</div>
				<div>
					<input type="text" name="securityquestion2" id="securityquestion2" placeholder="Answer 2" required/>
				</div>
                <div>
					<input type="password" name="password" id="password" placeholder="Type your new password." required/>
				</div>
                <div>
					<input type="password" name="cpassword" id="cpassword" placeholder="Retype your new password." required/>
				</div>
				<div>
					<input type="submit" name="submit" id="submit" value="Reset"/>
				</div>
				<div>
					Not a member? <a href="register.php">Sign Up</a>
				</div>
				<div>
					Click here to login. <a href="login.php">Login</a>
				</div>			
			</form>
		</div>
	</div>

<?php

include ('footer.php');

?>