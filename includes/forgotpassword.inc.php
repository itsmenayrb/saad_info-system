<?php
    include 'dbh.inc.php';
    require_once '../functions.php';

    use PHPMailer\PHPMailer\PHPMailer;


    if(isset($_POST['send'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck<1){
            header("Location: ../forgotpassword.php?reset=email");
            exit();
        }
        else{
            $token = generateNewString();

            $sql = "UPDATE users SET Token = '$token' WHERE Email = '$email'";
            mysqli_query($conn,$sql);

            require_once '../PHPMailer/PHPMailer.php';
            require_once '../PHPMailer/Exception.php';

            $mail = new PHPMailer();
            $mail->addAddress($email);
            $mail->setFrom("yourhelpdesk@salitrandos.x10host.com" , "Reset Password");
            $mail->Subject = "Reset Password";
            $mail->isHTML(true);
            $mail->Body = "
                Hi, <br><br>
                
                In order to reset your password, please click on the link below:<br>
                <a href='http://salitrandos.x10host.com/resetPassword.php?email=$email&token=$token'>http://salitrandos.x10host.com/resetPassword.php?email=$email&token=$token</a><br><br>
                Kind Regards,<br>
                Admin
            ";

            if($mail->send()){
                exit("Email sent! Please check your inbox.");
            }
            else{
                exit("Message sending failed. Please check your inputs!");
            }

        }
    }

    if(isset($_POST['resetPassword'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $securityQuestionOneAnswer = mysqli_real_escape_string($conn, $_POST['securityQuestionOneAnswer']);
        $securityQuestionTwoAnswer = mysqli_real_escape_string($conn, $_POST['securityQuestionTwoAnswer']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        $sql = "SELECT * FROM users WHERE Username='$username'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
            header("Location: ../forgotpassword.php?reset=error");
            exit();
        }

        else {
            $sql = "SELECT * FROM users WHERE AnswerOne = '$securityQuestionOneAnswer' AND AnswerTwo = '$securityQuestionTwoAnswer'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck < 1) {
                header("Location: ../forgotpassword.php?reset=invalid");
                exit();
            } else {
                if (!preg_match("/^[a-zA-Z0-9]{8,}$/", $password)) {
                    header("Location: ../forgotpassword.php?reset=perror");
                    exit();
                } else {
                    if ($password != $cpassword) {
                        header("Location: ../forgotpassword.php?reset=cperror");
                        exit();
                    } else {
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                        $sql = "UPDATE users SET Password='$hashedPassword' WHERE AnswerOne='$securityQuestionOneAnswer' AND AnswerTwo = '$securityQuestionTwoAnswer'";
                        mysqli_query($conn, $sql);
                        header("Location:../forgotpassword.php?reset=success");
                        exit();
                    }
                }
            }
        }
    }
    ?>