<?php
	include 'header.php';
?>
	<div class="main-container">
		<div class="registration-container">
			<form action="includes/register.inc.php" method="POST" class="register-form" id="regForm">
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
								<input data-msg-required="Username must be five characters" data-rule-required="true" type="text" name="username" id="username" placeholder="at least five characters" autofocus="true" oninput="this.className = ''oninput="this.className = ''" required/>
							</div>
							
							<div>
								<label>Email<span style="color:red">*</span></label>
								<input type="email" name="email" id="email" placeholder="example@domain.com" oninput="this.className = ''" required/>
							</div>
							<div>
								<label>Security Question 1<span style="color:red">*</span></label>
								<select name="securityquestionone">
									<option value="Name_First_Pet">What is the name of your first pet?</option>
									<option value="Mother_Maiden_Name" selected>What is your mother's maiden name?</option>
									<option value="Favorite_Place_as_a_Child">What was your favorite place to visit as a child?</option>
									<option value="Favorite_Actor">Who is your favorite actor?</option>
									<option value="Highschool_Attend">What high school did you attend?</option>
									<option value="Street_Growup_on">What street did you grow up on?</option>
									<option value="Favorite_Color">What is your favorite color?</option>
								</select>
								<input type="text" name="securityquestiononeanswer" id="securityquestiononeanswer" placeholder="Answer" oninput="this.className = ''" required/>
							</div>
							<div>
								<label>Security Question 2<span style="color:red">*</span></label>
								<select name="securityquestiontwo">
									<option value="Father_Middle_Name" selected>What is your father's middle name?</option>
									<option value="Favorite_Singer">What is your favorite singer?</option>
									<option value="Favorite_Teacher">What is the name of your favorite teacher?</option>
									<option value="City_were_born">In what city were you born?</option>
									<option value="Favorite_Movie">What is your favorite movie?</option>
									<option value="First_School">What is the name of your first school?</option>
									<option value="When_Anniversary">When is your anniversary?</option>
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
								<strong>Prefix</strong><span style="color:red">*</span>
								<select name="prefix">
									<option value="Mr" selected>Mr.</option>
									<option value="Ms">Ms.</option>
								</select>
							</div>
							<div>
								<strong>First Name</strong><span style="color:red">*</span>
								<input type="text" name="fname" id="fname" placeholder="letters and spaces only" oninput="this.className = ''" required/>
							</div>
							<div>
								<strong>Middle Name</strong><small><i>(optional)</i></small>
								<input type="text" name="mname" id="mname" placeholder="letters and spaces only" oninput="this.className = ''"/>
							</div>
							<div>
								<strong>Last Name</strong><span style="color:red">*</span>
								<input type="text" name="lname" id="lname" placeholder="letters and spaces only" oninput="this.className = ''" required/>
							</div>
							<div>
								<strong>Suffix</strong>
								<select name="suffix">
									<option value="-" selected>-</option>
									<option value="Jr">Jr.</option>
									<option value="Sr">Sr.</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
									<option value="V">V</option>
								</select>
							</div>
							<div>
								<strong>Gender</strong><span style="color:red">*</span>
								<ul style="list-style-type:none;">
									<li><input type="radio" id="male" name="gender" value="Male" checked>Male</li>
									<li><input type="radio" id="female" name="gender" value="Female">Female</li>
								<ul>
							</div>
							<div>
							<strong>Birthday</strong><span style="color:red">*</span>
								<input type="text" name="birthday" max="2006-01-01" required/>
							</div>
							<div>
							<strong>Age</strong>
								
							</div>
							<div>
								<strong>Birth Place</strong><span style="color:red">*</span>	
								<input type="text" name="birthplace" id="birthplace" style="width:86.3%;" oninput="this.className = ''" required/>
							</div>
							<div>
								<strong>Address</strong><span style="color:red">*</span>	
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
								<strong>Contact Number</strong><small><i>(optional)</i></small><br>	
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

		<script type="text/javascript">
			$("form").validate({
				showErrors: function(errorMap, errorList){
					$.each(this.validElements(), function(index,element){
						var $element = $(element);

						$element.data("title","")
							.removeClass("error")
							.tooltip("destroy");
					});

					$.each(errorList, function(index,error){
						var $element = $(error.element);

						$element.tooltip("destroy")
							.data("title",error.message);
							.addClass("error")
							.tooltip();
					});
				},

                submitHandler: function(form){
				    alert("You have registered successfully!");
                }

			});
		</script>
		
<?php
	include 'footer.php';
?>