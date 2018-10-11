<<<<<<< HEAD
<?php
include 'includes/dbh.inc.php';
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- SIZE BASE ON THE DEVICE USING BY A USER -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- END OF META -->

    <title>Barangay Salitran II</title>

    <!-- BOOTSTRAP AND CSS SCRIPT -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link href="assets/bootstrap/css/glyphicons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- END OF BOOSTRAP AND CSS SCRIPT -->

    <div class="jumbotron jumbotron-fluid"> <!-- JUMBOTRON -->
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-md-2 col-lg-2">
                    <a href="index.php"><img src="img/logo.png" class="img-responsive" height="135" width="135" style="margin-top: 10px;margin-left: 10px;max-width: 100%;height: auto;"></a>
                </div>
                <div class="d-none d-md-block col-sm-7 col-md-6 col-lg-5" style="font-family: 'Baskerville Old Face';">
                    <label class="h6" style="margin-top: 20px; font-size: 2.5vw;"><u>Republic of the Philippines</u></label><br>
                    <label class="h1" style="margin-top: -10px;margin-left: -25px;font-size: 4vw;">Barangay Salitran II</label><br>
                    <label class="h4" style="margin-top: -40px;font-size: 2vw;">City of Dasmariñas, Province of Cavite</label>
                </div>
                <div class="d-none d-md-block col-sm-3 col-md-4 col-lg-5 text-right" style="font-family: 'Baskerville Old Face';">
                    <label class="h6" style="margin-top: 40px;font-size: 1.75vw;"><u>Philippine Standard Time</u></label>
                    <label class="h6" style="margin-top: -10px;font-size: 1.75vw;"><?php date_default_timezone_set("Asia/Hong_Kong"); echo date("l,m/d/Y") . " "; echo date("h:i:sa");?></label>
                </div>
            </div>
        </div>
    </div> <!-- END OF JUMBOTRON -->

    <!-- START OF NAVIGATION -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Barangay Salitran II</a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainNavigation" aria-expanded="false"
            aria-controls="mainNavigation" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contain links, forms  and other data for toggling -->
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span> </a> </li>
                    <li class="nav-item"><a class="nav-link" href="index.php">News</a> </li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Downloads</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Barangay ID</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Barangay Clearance</a>
                            <a class="dropdown-item" href="#">Cedula</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-1 form-control-sm" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info btn-sm mr-sm-5" type="submit">Search</button>
                    <?php
                        if(isset($_SESSION['id'])){
                            echo "<a href='update.resident.php'>Update Account</a><a href='includes/logout.inc.php'>Sign Out</a>";
                        }
                        else {
                            echo "<button type = 'button' class='btn btn-primary btn-sm mr-sm-2' data-toggle = 'modal' data-target = '#loginModal' > Login</button>
                            <button type = 'button' class='btn btn-outline-secondary btn-sm my-2 my-sm-0' data-toggle = 'modal' data-target = '#registrationModal'> Register</button >";
                        }
                    ?>
                </form>
            </div>
        </div>
    </nav>
    <!-- END OF NAVIGATION -->

    <!-- REGISTRATION FORM MODAL -->
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document";">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="register">Register</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="includes/register.inc.php" method="post">
                            <div class="row">
                                <div class="col-md-5"> <!-- START OF FIRST COLUMN -->
                                    <!--
                                    SIGN IN INFORMATION!!!
                                    SIGN IN INFORMATION!!!
                                    SIGN IN INFORMATION!!!
                                    -->
                                    <legend>Sign-in Information</legend>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" aria-describedby="usernameHelpBlock" required/>
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
                                        <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelpBlock" required/>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            Password must contain at least eight characters long, contain letters or numbers and must not contain spaces.
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" name="cpassword" id="cpassword" aria-describedby="cpasswordHelpBlock" required/>
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
                                                <input type="text" class="form-control" name="telephonenumber" maxlength="10" placeholder="0461234567" aria-describedby="tnHelpBlock" />
                                            </div>
                                            <div class="col-md-6">
                                                <small id="cnHelpBlock" class="form-text text-muted">Cellphone Number</small>
                                                <input type="text" class="form-control" name="cellphonenumber" maxlength="11" placeholder="09123456789" aria-describedby="cnHelpBlock"/>
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
                                        <button type="submit" name="submit" class="btn btn-danger form-control" data-dismiss="modal">Cancel</button>
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
                </div> <!-- END OF MODAL BODY -->
                <div class="modal-footer"> <!-- MODAL FOOTER -->
                    Already a member? <a href="#loginModal" role="button" class="btn btn-link" data-toggle="modal" data-dismiss="modal">Login</a>
                </div> <!-- END OF MODAL FOOTER -->
            </div> <!-- END OF MODAL CONTENT -->
        </div>  <!-- END OF MODAL DIALOG -->
    </div> <!-- END OF MODAL CLASS -->
    <!-- END OF REGISTRATION MODAL -->

    <!-- START OF LOGIN MODAL -->
    <div class="modal fade" id="loginModal" role="dialog" aria-labelledby="myLoginModal" aria-hidden="true"> <!-- START OF MODAL CLASS -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Login</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" style="height: 250px;">
                    <div class="container">
                        <form action="includes/login.inc.php" method="post">
                            <div class="form-group">
                                <i class="glyphicon glyphicon-user"></i>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username or Email" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="custom-control custom-checkbox text-center" id="terms">
                                <input type="checkbox" class="custom-control-input" id="checkboxRM" name="checkboxRM"/>
                                <label class="custom-control-label" for="checkboxRM">Remember me.</label>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Login"/>
                            </div>
                        </form> <!-- END OF FORM-->
                    </div> <!-- END OF CONTAINER -->
                </div><!-- END OF MODAL BODY -->
                <div class="modal-footer"> <!-- MODAL FOOTER -->
                    <div>
                        <small class="form-text text-muted">Not a member? <a href="#registrationModal" role="button" data-toggle="modal" data-dismiss="modal">Sign Up</a></small>
                    </div>
                    <div class="pull-right">
                        <small class="form-text text-muted">Forgot Password? Click <a href="#forgotPasswordModal" role="button" data-toggle="modal" data-dismiss="modal">here.</a></small>
                    </div>
                </div><!-- END OF MODAL FOOTER -->
            </div> <!-- END OF MODAL CONTENT -->
        </div><!-- END OF MODAL DIALOG -->
    </div> <!-- END OF MODAL CLASS -->
    <!-- END OF LOG-IN MODAL -->

    <!-- START OF FORGOT PASSWORD MODAL -->
    <div class="modal fade" id="forgotPasswordModal">
        <div class="modal-dialog""> <!-- MODAL DIALOG -->
        <div class="modal-content"> <!-- MODAL CONTENT -->
            <div class="modal-header"> <!-- MODAL HEADER -->
                <h3 class="modal-title text-center">Reset Password</h3>
                <button class="close" type="button" data-dismiss="modal">x</button>
            </div> <!-- END OF MODAL HEADER -->
            <div class="modal-body"> <!-- MODAL BODY -->
                <div class="container" style="max-width: 500px;"> <!-- START OF CONTAINER CLASS -->
                    <div class="row"> <!-- FIRST ROW -->
                        <div class="col-lg-12">
                            <legend>Choose how do you want to change your password.</legend>
                        </div>
                    </div> <!-- END OF FIRST ROW -->
                    <div class="row"> <!-- SECOND ROW -->
                        <div class="col-lg-12">
                            <div class="button dropdown">
                                <select id="resetselector ">
                                    <option value="email">Via email</option>
                                    <option value="secquestion" selected>Via security question</option>
                                </select>
                            </div>
                        </div>
                    </div> <!-- END OF SECOND ROW -->
                    <div class="row"> <!-- THIRD ROW -->
                        <div class="col-lg-12">
                            <div class="output" id="reset_options">
                                <form action="includes/forgotpassword.inc.php" method="POST"> <!-- FORM FOR EMAIL -->
                                    <div id="email" class="thru email">
                                        <input type="email" name="email" id="remail" autofocus="true" placeholder="Enter your email address" class="emailforresetpwd" required/>
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
                                </form> <!-- END OF FORM FOR EMAIL -->
                                <form action="includes/forgotpassword.inc.php" method="POST"> <!-- FORM FOR SECURITY QUESTION -->
                                    <div id="secquestion" class="thru secquestion">
                                        <input type="text" name="username" id="username" placeholder="Username" autofocus="true" required/>
                                        <input type="text" name="securityQuestionOneAnswer" id="securityquestiononeanswer" placeholder="Answer 1" required/>
                                        <input type="text" name="securityQuestionTwoAnswer" id="securityquestiontwoanswer" placeholder="Answer 2" required/>
                                        <input type="password" name="password" id="password" placeholder="Type your new password." required/>
                                        <input type="password" name="cpassword" id="cpassword" placeholder="Retype your new password." required/>
                                        <input type="submit" name="resetPassword" id="submit" value="Reset Password"/>
                                    </div>
                                </form> <!-- END OF FORM FOR SECURITY QUESTION -->
                            </div> <!-- END OF OUTPUT CLASS -->
                        </div> <!-- END OF COLUMN -->
                    </div> <!-- END OF THIRD ROW -->
                </div> <!-- END OF CONTAINER -->
            </div> <!-- END OF MODAL BODY -->
        </div> <!-- END OF MODAL CONTENT -->
    </div> <!-- END OF MODAL DIALOG -->
    </div> <!-- END OF FORGOT PASSWORD MODAL -->
</head>
=======
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Welcome - Barangay Salitran II</title>
		<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico"/>
		<!--CSS Styles -->
		<link href="style.css" rel="stylesheet">
		<script type="text/javascript" src="assets/js/jquery-2.2.1.js"></script>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="./index.php">
						<img src="./logo.circle.brand.png" alt="Home">
					</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div style="text-align:center;">
						<h5>Philippine Time: <?php date_default_timezone_set("Asia/Hong_Kong"); echo date("m/d/Y") . " "; echo date("h:i:sa");?></h5>
					</div>
		      <ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="aboutus.php">About us</a></li>
		      </ul>
		
		      <ul class="nav navbar-nav navbar-right">
						<?php
							if (isset($_SESSION['user_ID'])) {
								echo '<li><a href="./update.resident.php">Update Account</a></li>
								<li><a href="includes/logout.inc.php">Logout</a></li>';
							}
							else{
								echo '<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Sign Up</a></li>';
							}
						?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</head>



	<body>
>>>>>>> ff229c135ae5856534e9ceeb8492b19d818599bc
