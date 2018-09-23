<?php

include "dbh.inc.php";

if (isset($_POST['submit'])) {

  //dbh.inc.php yung filename ng connector sa database, $conn naman yung variable.

  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

  //Error handlers
  // Check if input characters are valid, dapat letters lang
  if (!preg_match("/^[a-zA-Z]*$/" , $fname) || !preg_match("/^[a-zA-Z]*$/" , $lname)) {
    header("Location: ../register.php?signup=invalid");
    exit();
  } 

  else {
    // Check if email is valid 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: ../register.php?signup=email");
      exit();
    }

    else{
      $sql = "SELECT * FROM residents WHERE Email = '$email'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        header("Location: ../register.php?signup=emailexist");
        exit();
      }

      else {

        if (!preg_match("/^[a-zA-Z0-9]{5,}$/" , $username)){
          header("Location: ../register.php?signup=uerror");
          exit();
        }

        else{
          //Magccheck kapag yung username is nagamit na.
          $sql = "SELECT * FROM residents WHERE Username = '$username'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            header("Location: ../register.php?signup=usernametaken");
            exit();
          } 

          else {
            if (!preg_match("/^[a-zA-Z0-9]{8,}$/" , $password)){
              header("Location: ../register.php?signup=perror");
            }

            else {
              if ($password != $cpassword) {
                header("Location: ../register.php?signup=pwderror");
                exit();
              }
              else {

                if(!isset($_POST['checkboxTerms'])){
                  header("Location: ../register.php?signup=terms");
                  exit();
                }

                else{
                  // Hashing the password para secure.
                  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                  //Insert the user into the database
                  $sql = "INSERT INTO residents (FirstName, LastName, Email, Username, Password) VALUES ('$fname', '$lname', '$email', '$username', '$hashedPassword');";
                  mysqli_query($conn, $sql);
                  header("Location: ../register.php?signup=success");
                  exit();
                }
              }              
            }
          }
        }
      }
    }
  } 
}
else {
  header("Location: ../register.php");
  exit();
}