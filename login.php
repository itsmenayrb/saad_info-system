<?php
	include 'header.php';
	include 'includes/action.inc.php';
?>
<div class="container" id="loginContainer">
	<form action="login.php" method="post" id="login-form">
		<?php include 'errors.php'; ?>
		<br>
		<div class="form-group">
			<label for="username" class="h5">Username</label>
			<input type="text" class="form-control" name="username" id="username" minlength="5" required/>
		</div>
		<div class="form-group">
			<label for="password" class="h5">Password</label>
			<input type="password" class="form-control" name="password" id="password" minlength="8" required/>
		</div>
		<div class="custom-control custom-checkbox" id="terms">
			<input type="checkbox" class="custom-control-input" id="checkboxRM" name="checkboxRM"/>
			<label class="custom-control-label" for="checkboxRM">Remember me.</label>
			<a class="float-right" href="forgotpassword.php" role="button">Forgot Password?</a>                       
		</div>          
		<br>
		<div class="form-group">
			<input type="submit" class="form-control btn btn-primary" name="login" id="login" value="Login"/>
		</div>
	</form> <!-- END OF FORM-->
</div> <!-- END OF CONTAINER -->
<script>
	$('#login-form').validate();
</script>
<?php include 'footer.php'; ?>