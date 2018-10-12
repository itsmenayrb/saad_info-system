<?php
    include 'header.php'
?>
<div class="container" id="regContainer">
    <form action="includes/register.inc.php" method="post" id="registration-form">
        <div class="row">
            <div class="col-md-5" > <!-- START OF FIRST COLUMN -->
                <!--
                SIGN IN INFORMATION!!!
                SIGN IN INFORMATION!!!
                SIGN IN INFORMATION!!!
                -->
                <legend>Sign-in Information</legend>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" aria-describedby="usernameHelpBlock" minlength="5" required/>
                    <small id="usernameHelpBlock" class="form-text text-muted">
                        Username must at least five characters long, contain letters or numbers and must not contain spaces.
                    </small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelpBlock" required/>
                    <small id="emailHelpBlock" class="form-text text-muted">
                        Please enter a valid email. e.g example@domain.com
                    </small>
                </div>
                <div class="form-group">
                    <label for="securityquestionone">Security Question 1</label>
                    <select name="securityquestionone" id="securityquestionone" class="form-control">
                        <option value="" class="form-control" selected><i>(Choose One)</i></option>
                        <option value="Name_First_Pet" class="form-control">What is the name of your first pet?</option>
                        <option value="Mother_Maiden_Name" class="form-control">What is your mother's maiden name?</option>
                        <option value="Favorite_Place_as_a_Child" class="form-control">What was your favorite place to visit as a child?</option>
                        <option value="Favorite_Actor" class="form-control">Who is your favorite actor?</option>
                        <option value="Highschool_Attend" class="form-control">What high school did you attend?</option>
                        <option value="Street_Growup_on" class="form-control">What street did you grow up on?</option>
                        <option value="Favorite_Color" class="form-control">What is your favorite color?</option>
                    </select>
                    <input type="text" name="securityquestiononeanswer" class="form-control" aria-describedby="secQOneHelpBlock" required/>
                    <small id="secQOneHelpBlock" class="form-text text-muted">
                        Select a preferred question and answer it on the textbox above. Do not forget your answer.
                    </small>
                </div>
                <div class="form-group">
                    <label for="securityquestiontwo">Security Question 2</label>
                    <select name="securityquestiontwo" id="securityquestiontwo" class="form-control">
                        <option value="" selected class="form-control"><i>(Choose One)</i></option>
                        <option value="Father_Middle_Name" class="form-control">What is your father's middle name?</option>
                        <option value="Favorite_Singer" class="form-control">What is your favorite singer?</option>
                        <option value="Favorite_Teacher" class="form-control">What is the name of your favorite teacher?</option>
                        <option value="City_were_born" class="form-control">In what city were you born?</option>
                        <option value="Favorite_Movie" class="form-control">What is your favorite movie?</option>
                        <option value="First_School" class="form-control">What is the name of your first school?</option>
                        <option value="When_Anniversary" class="form-control">When is your anniversary?</option>
                    </select>
                    <input type="text" name="securityquestiontwoanswer" class="form-control" id="securityquestiontwoanswer" aria-describedby="secQTwoHelpBlock" required/>
                    <small id="secQTwoHelpBlock" class="form-text text-muted">
                        Select a preferred question and answer it on the textbox above. Do not forget your answer.
                    </small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelpBlock" minlength="8" required/>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Password must contain at least eight characters long, contain letters or numbers and must not contain spaces.
                    </small>
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" name="cpassword" id="cpassword" aria-describedby="cpasswordHelpBlock" minlength="8" required/>
                    <small id="cpasswordHelpBlock" class="form-text text-muted">
                        Re-type Password.
                    </small>
                </div>
            </div> <!-- END OF FIRST COLUMN -->
            <div class="col-md-7 ml-auto"> <!-- START OF SECOND COLUMN -->
                <!--
                PERSONAL INFORMATION!!!
                PERSONAL INFORMATION!!!
                PERSONAL INFORMATION!!!
                -->
                <legend>Personal Information</legend>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="prefix">Prefix</label>
                        <select name="prefix" id="prefix" class="form-control">
                            <option value="Mr" selected class="form-control">Mr.</option>
                            <option value="Ms" class="form-control">Ms.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Juan" required/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="mname">Middle Name</label>
                        <input type="text" class="form-control" name="mname" id="mname" placeholder="Dela"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-9">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Cruz" required/>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="suffix">Suffix</label>
                        <select name="suffix" id="suffix" class="form-control">
                            <option value="" selected class="form-control">-</option>
                            <option value="Jr" class="form-control">Jr.</option>
                            <option value="Sr" class="form-control">Sr.</option>
                            <option value="III" class="form-control">III</option>
                            <option value="IV" class="form-control">IV</option>
                            <option value="V" class="form-control">V</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group">
                        <label>Gender</label>
                        <div class="clearfix"></div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="male" name="gender" value="Male" checked>
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="female" name="gender" value="Female">
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="birthday">Birthdate</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" max="2006-01-01" required/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" readonly/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthplace">Birth Place</label>
                    <input type="text" class="form-control" name="birthplace" id="birthplace" required/>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <div class="row">
                        <div class="col-md-4">
                            <small id="blockHelpBlock" class="form-text text-muted">Block</small>
                            <input type="text" class="form-control" name="block" aria-describedby="blockHelpBlock"/>
                        </div>
                        <div class="col-md-4">
                            <small id="streetHelpBlock" class="form-text text-muted">Street</small>
                            <input type="text" class="form-control" name="street" aria-describedby="streetHelpBlock"/>
                        </div>
                        <div class="col-md-4">
                            <small id="subdivisionHelpBlock" class="form-text text-muted">Subdivision</small>
                            <input type="text" class="form-control" name="subdivision" aria-describedby="subdivisionHelpBlock"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <small id="barangayHelpBlock" class="form-text text-muted">Barangay</small>
                            <input type="text" class="form-control" placeholder="Salitran II" aria-describedby="subdivisionHelpBlock" readonly/>
                        </div>
                        <div class="col-md-4">
                            <small id="cityHelpBlock" class="form-text text-muted">City/Municipality</small>
                            <input type="text" class="form-control" placeholder="Dasmariñas City" aria-describedby="cityHelpBlock" readonly/>
                        </div>
                        <div class="col-md-4">
                            <small id="provinceHelpBlock" class="form-text text-muted">Province</small>
                            <input type="text" class="form-control" placeholder="Cavite" aria-describedby="provinceHelpBlock" readonly/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <small id="countryHelpBlock" class="form-text text-muted">Country</small>
                            <input type="text" class="form-control" placeholder="Philippines" aria-describedby="countryHelpBlock" readonly/>
                        </div>
                        <div class="col-md-4">
                            <small id="zipHelpBlock" class="form-text text-muted">Zip Code</small>
                            <input type="text" class="form-control" placeholder="4114" aria-describedby="zipHelpBlock" readonly/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Contact Number</label><small><i>(optional)</i></small>
                    <div class="row">
                        <div class="col-md-6">
                            <small id="tnHelpBlock" class="form-text text-muted">Telephone Number</small>
                            <input type="text" class="form-control" name="telephonenumber" minlength="10" maxlength="10" placeholder="0461234567" aria-describedby="tnHelpBlock" />
                        </div>
                        <div class="col-md-6">
                            <small id="cnHelpBlock" class="form-text text-muted">Cellphone Number</small>
                            <input type="text" class="form-control" name="cellphonenumber" minlength="11" maxlength="11" placeholder="09123456789" aria-describedby="cnHelpBlock"/>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="custom-control custom-checkbox" id="terms">
                    <input type="checkbox" class="custom-control-input" id="checkboxTerms" name="checkboxTerms" checked="checked" required/>
                    <label class="custom-control-label" for="checkboxTerms">By creating an account, you are agreeing to our <a href="#"><u>Terms</u></a> and <a href="#"><u>Privacy</u></a> Policy.</label>
                </div>
            </div> <!-- END OF SECOND COLUMN -->
        </div> <!-- END OF ROW -->
        <div class="row"> <!-- ROW FOR BUTTON -->
            <div class="col-md-5">
                <div class="form-group">
                    <a role="button" class="btn btn-danger form-control" href="index.php">Cancel</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary form-control">Register</button>
                </div>
            </div>
        </div> <!-- END OF ROW FOR BUTTON -->
    </form>
</div> <!-- END OF CLASS CONTAINER -->
<script>
    $('#registration-form').validate({
        rules:{
            cpassword:{
                equalTo:"#password",
            }
        }
    });

    window.onbeforeunload = function(){
        return "Are your sure you want to leave this page?";
    };
</script>
<?php include 'footer.php';?>