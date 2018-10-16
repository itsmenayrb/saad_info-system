<?php
    include 'dbh.inc.php';
    require_once '../functions.php';

    use PHPMailer\PHPMailer\PHPMailer;

    $errors = array();
    
    if(isset($_POST['send'])){
        $email = checkInput($_POST['email']);

        $sql = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck<1){
            array_push($errors, "Email not sent. Invalid Email.");
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
        $username = checkInput($_POST['username']);
        $securityQuestionOneAnswer = checkInput($_POST['securityQuestionOneAnswer']);
        $securityQuestionTwoAnswer = checkInput($_POST['securityQuestionTwoAnswer']);
        $password = checkInput($_POST['password']);
        $cpassword = checkInput($_POST['cpassword']);

        $sql = "SELECT * FROM users WHERE Username='$username' AND AnswerOne = '$securityQuestionOneAnswer' AND AnswerTwo = '$securityQuestionTwoAnswer'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
            array_push($errors, "Invalid input! Please make sure that the username and answers is correct.");
        }

        else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "UPDATE users SET Password='$hashedPassword' WHERE AnswerOne='$securityQuestionOneAnswer' AND AnswerTwo = '$securityQuestionTwoAnswer'";
            mysqli_query($conn, $sql);
            echo "<script>alert('Reset Password Successful!');</script>";
            header("Location: ../login.php");
            exit(); 
        }
    }
?>