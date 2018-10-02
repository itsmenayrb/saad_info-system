<?php
	include 'header.php';
?>
	<div class="main-container">
		<div class="registration-container">
			<form action="includes/register.inc.php" method="post" class="register-form" id="regForm">
				<div class="registration-form-header">
					<legend>
						<label>Register</label>
					</legend>
				</div>
				<div class="left-container">
					<label><h3>Sign-in Information</h3></label>
					<hr>
					<div id="registration-panel-1" class="tab">
						<fieldset>
							<div>
								<label>Username<span style="color:red">*</span></label>
								<input type="text" name="username" id="username" placeholder="at least five characters" autofocus="true" oninput="this.className = ''oninput="this.className = ''" required/>
							</div>
							<div>
								<label>Email<span style="color:red">*</span></label>
								<input type="email" name="email" id="email" placeholder="example@domain.com" oninput="this.className = ''" required/>
							</div>
							<div>
								<label>Security Question 1<span style="color:red">*</span></label>
								<select name="securityquestionone">
									<option value="pet">What is the name of your first pet?</option>
									<option value="maiden" selected>What is your mother's maiden name?</option>
								</select>
								<input type="text" name="securityquestiononeanswer" id="securityquestiononeanswer" placeholder="Answer" oninput="this.className = ''" required/>
							</div>
							<div>
								<label>Security Question 2<span style="color:red">*</span></label>
								<select name="securityquestiontwo">
									<option value="pet" selected>What is the name of your first pet?</option>
									<option value="maiden">What is your mother's maiden name?</option>
								</select>
								<input type="text" name="securityquestiontwoanswer" id="securityquestiontwoanswer" placeholder="Answer" oninput="this.className = ''" required/>
							</div>
							<div>
								<label>Password<span style="color:red">*</span></label>
								<input type="password" name="password" id="password" placeholder="at least eight characters" oninput="this.className = ''" required/>
							</div>
							<div>
								<label>Confirm Password<span style="color:red">*</span></label>
								<input type="password" name="cpassword" id="cpassword" placeholder="Re-type Password" oninput="this.className = ''" required/>
							</div>
						</fieldset>
					</div>
				</div>
				<div class="right-container">
					<label><h3>Personal Information</h3></label>
					<hr>
					<div id="registration-panel-2" class="tab">
						<fieldset>
							<div>
								Prefix<span style="color:red">*</span>
								<select name="prefix">
									<option value="mr" selected>Mr.</option>
									<option value="ms">Ms.</option>
								</select>
							</div>
							<div>
								First Name<span style="color:red">*</span>
								<input type="text" name="fname" id="fname" placeholder="letters and spaces only" oninput="this.className = ''" required/>
							</div>
							<div>
								Middle Name<span style="color:red">*</span>
								<input type="text" name="mname" id="mname" placeholder="letters and spaces only" oninput="this.className = ''" required/>
							</div>
							<div>
								Last Name<span style="color:red">*</span>
								<input type="text" name="lname" id="lname" placeholder="letters and spaces only" oninput="this.className = ''" required/>
							</div>
							<div>
								Suffix
								<select name="suffix">
									<option value="-" selected>-</option>
									<option value="jr">Jr.</option>
									<option value="sr">Sr.</option>
									<option value="iii">III</option>
									<option value="iv">IV</option>
									<option value="v">V</option>
								</select>
							</div>
							<div>
								Gender<span style="color:red">*</span>
								<ul style="list-style-type:none;">
									<li><input type="radio" id="male" name="gender" value="male" checked>Male</li>
									<li><input type="radio" id="female" name="gender" value="female">Female</li>
								<ul>
							</div>
							<div>
							Birthday<span style="color:red">*</span>
								<input type="text" placeholder="YYYY-mm-dd" name="birthday" max="2006-01-01" required/>
							</div>
							<div>
							Age
								
							</div>
							<div>
								Birth Place<span style="color:red">*</span>	
								<input type="text" name="birthplace" id="birthplace" style="width:80%;" oninput="this.className = ''" required/>
							</div>
							<div>
								Address</span style="color:red">*</span>	
								<input type="text" name="block" placeholder="Block/Lot/Unit/House No." oninput="this.className = ''"/>
								<input type="text" name="street" placeholder="Street" oninput="this.className = ''"/>
								<input type="text" name="subdivision" placeholder="Subdivision" oninput="this.className = ''"/>
								<p class="readonly">Barangay Salitran II</p>
								<p class="readonly">Dasmariñas City</p>
								<p class="readonly">Cavite</p>
								<p class="readonly">Philippines</p>
								<p class="readonly">4114</p>
							</div>
							<div>
								Contact Number<br>	
								Telephone number:<input type="text" name="telephonenumber" maxlength="10" placeholder="0461234567" />
								Cellphone number:<input type="text" name="cellphonenumber" maxlength="11" placeholder="09123456789" />
							</div>
							<div id="terms">
								<input type="checkbox" id="checkboxTerms" name="checkboxTerms" checked="checked" required/>
								By creating an account, you are agreeing to our <a href="#"><u>Terms</u></a> and <a href="#"><u>Privacy</u></a> Policy.
								</div>
						</fieldset>
						
					</div>
					<div class="row-button">
						<button type="button" name="cancel" class="cancelBtn">Cancel</button>
						<button type="submit" name="submit" class="submitBtn">Register</button>
					</div>
					<div id="login-on-register-page-link">
						Already a member? <a href="login.php"><u>Login</u></a>
					</div>
				</form>
			</div>
			
		</div>
		
<?php
	include 'footer.php';
?>