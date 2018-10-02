<?php include "dbh.inc.php" ; 
/*
if (isset($_POST['send'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../forgotpassword.php?reset=error");
        exit();
    }

    else{

    $sql = "SELECT * FROM residents WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1) {
            header("Location: ../forgotpassword.php?reset=noemail");
            exit();
        }

        elseif ($resultCheck > 0){
            header("Location: ../forgotpassword.php?reset=pending");
            exit();
        }

    }

}*/

if (isset($_POST['resetpwd'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $secQuestionOne = mysqli_real_escape_string($conn, $_POST['securityquestion1']);
    $secQuestionTwo = mysqli_real_escape_string($conn, $_POST['securityquestion2']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $sql = "SELECT * FROM residents WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1){
        header("Location: ../forgotpassword.php?username=error");
        exit();
    }

    else{

        $sql = "SELECT * FROM residents WHERE SecQuestion1 = '$secQuestionOne' AND SecQuestion2 ='$secQuestionTwo'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1){
            header("Location ../fogotpassword.php?reset=incorrect");
        }

        else{

            if ($password != $cpassword) {
                echo "Password does not match.";
            }
    
            else {
                // Hashing the password para secure.
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                //Insert the user into the database
                $sql = "INSERT INTO residents (Password) VALUES ('$hashedPassword')";
                mysqli_query($conn, $sql);
                header("Location: ../forgotpassword.php?reset=success");
                exit();
            }
        }
    }
}

?>
