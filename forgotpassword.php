<?php
include 'header.php';
?>
    <div class="main-container">
        <div class="pwdreset-container">
            <p> Reset Password </p>

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
                    <form action="includes/forgotpassword.inc.php" method="POST">
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
                    </form>
                    <form action="includes/forgotpassword.inc.php" method="POST">
                    <div id="secquestion" class="thru secquestion">
                        <input type="text" name="username" id="username" placeholder="Username" autofocus="true" required/>
                        <input type="text" name="securityQuestionOneAnswer" id="securityquestiononeanswer" placeholder="Answer 1" required/>
                        <input type="text" name="securityQuestionTwoAnswer" id="securityquestiontwoanswer" placeholder="Answer 2" required/>
                        <input type="password" name="password" id="password" placeholder="Type your new password." required/>
                        <input type="password" name="cpassword" id="cpassword" placeholder="Retype your new password." required/>
                        <input type="submit" name="resetPassword" id="submit" value="Reset Password"/>
                    </div>
                    </form>
                </div>
                <div id="login-register-link">
                    <br>Not a member? <a href="register.php">Sign Up</a>
                </div>
                <div id="login-account-reset-link">
                    Click here to <a href="login.php">Login</a>
                </div>
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
    <script>
        var  email = $("#remail");

        $(document).ready(function () {
           $('#submit').on('click', function(){
               if(email.val() != ""){
                   email.css('border', '1px solid green');

                   $.ajax({
                       url:'forgotpassword.php',
                       method: 'POST',
                       dataType: 'text',
                       data: {
                           email: email.val()
                       }, success: function (response){
                           console.log(response);
                       }
                   })
               }
               else{
                   email.css('border', '1px solid red');
               }
           });
        });
    </script>
<?php
include ('footer.php');
?>