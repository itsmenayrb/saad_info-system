<?php
include 'header.php';
?>
    
<div class="container" id="fpContainer"> <!-- START OF CONTAINER CLASS -->
    <div class="row"> <!-- FIRST ROW -->
        <div class="col-lg-12">
            <legend>Choose how do you want to change your password.</legend>
        </div>
    </div> <!-- END OF FIRST ROW -->
    <div class="row"> <!-- SECOND ROW -->
        <div class="col-lg-12">
            <form id="reset-password-selection-form">
                <select id="resetselector" class="form-control">
                    <option value="blank" selected="selected"></option>
                    <option value="email-form">Via email</option>
                    <option value="security-question-form">Via security question</option>
                </select>
            </form>
        </div>
    </div> <!-- END OF SECOND ROW -->
    <div class="row"> <!-- THIRD ROW -->
        <div class="col-lg-12">
            <div class="output">
                <form id="blank"></form>
                <form action="includes/forgotpassword.inc.php" method="POST" id="email-form"> <!-- FORM FOR EMAIL -->
                    <div class="form-group">
                        <br>
                        <input type="email" name="email" id="remail" autofocus="true" class="form-control" placeholder="Enter your email address" class="emailforresetpwd" aria-describedby="remailHelpBlock" required/>
                        <small id="remailHelpBlock" class="form-text text-muted">To reset your password, enter your email and we will send reset password instructions on your email.</small><br>
                        <input type="submit" class="form-control btn btn-primary" id="send" name="send" value="Send"/>
                    </div>
                </form> <!-- END OF FORM FOR EMAIL -->
                <form action="includes/forgotpassword.inc.php" method="POST" id="security-question-form"> <!-- FORM FOR SECURITY QUESTION -->
                    <div class="form-group">
                        <small id="rusernameHelpBlock" class="form-text text-muted">Username</small>
                        <input type="text" class="form-control" name="username" id="username" autofocus="true" minlength="5" aria-describedby="rusernameHelpBlock" required/>
                        <div class="row">
                            <div class="col-md-6">
                                <small id="rsec1HelpBlock" class="form-text text-muted">Security Question One <i>(Answer)</i></small>
                                <input type="text" class="form-control" name="securityQuestionOneAnswer" id="securityquestiononeanswer" aria-describedby="rsec1HelpBlock" required/>
                            </div>
                            <div class="col-md-6">
                                <small id="rsec2HelpBlock" class="form-text text-muted">Security Question Two <i>(Answer)</i></small>
                                <input type="text" class="form-control" name="securityQuestionTwoAnswer" id="securityquestiontwoanswer" aria-describedby="rsec2HelpBlock" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <small id="rpasswordHelpBlock" class="form-text text-muted">Type your new password</small>
                                <input type="password" class="form-control" name="password" id="password" aria-describedby="rpasswordHelpBlock" minlength="8" required/>
                            </div>
                            <div class="col-md-6">
                                <small id="rcpasswordHelpBlock" class="form-text text-muted">
                                    Re-type Password.
                                </small>
                                <input type="password" class="form-control" name="cpassword" id="cpassword" aria-describedby="rcpasswordHelpBlock" minlength="8" required/>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="form-control btn btn-primary" name="resetPassword" id="reset" value="Reset Password"/>
                    </div>
                </form> <!-- END OF FORM FOR SECURITY QUESTION -->
            </div> <!-- END OF OUTPUT CLASS -->
        </div> <!-- END OF COLUMN -->
    </div> <!-- END OF THIRD ROW -->
</div> <!-- END OF CONTAINER -->
<script>
    $('#email-form').validate();
    $('#security-question-form').validate({
        rules:{
            cpassword:{
                equalTo:"#password",
            }
        }
    });

    $("#resetselector").on("change", function() {
        $("#" + $(this).val()).show().siblings().hide();
    });
</script>
<?php
include ('footer.php');
?>