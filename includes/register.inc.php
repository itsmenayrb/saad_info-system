<?php

include "dbh.inc.php";

if (isset($_POST['submit'])) {

  //dbh.inc.php yung filename ng connector sa database, $conn naman yung variable.

  $errors = array();

  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email'] );
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

  //Error handlers
  //Check for empty fields or kapag may hindi na input sa mga boxes

  if (empty($fname) || empty($lname) || empty($email) || empty($username) || empty($password) || empty($cpassword)) {
    header("Location: ../register.php?signup=emptyfields");
    array_push($errors, "All fields are required");
  } 

  else {
    // Check if input characters are valid, dapat letters lang
    if (!preg_match("/^[a-zA-Z]*$/" , $fname) || !preg_match("/^[a-zA-Z]*$/" , $lname)) {
      header("Location: ../register.php?signup=invalid");
      array_push($errors, "Invalid Characters");
    } 

    else {
      // Check if email is valid 
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?signup=email");
        array_push($errors, "Invalid Email");
      }

        $sql = "SELECT * FROM residents WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        header("Location: ../register.php?signup=emailisalreadyused");
        array_push($errors, "Email is already used.");
      } 

      else {
        //Magccheck kapag yung username is nagamit na.
        $sql = "SELECT * FROM residents WHERE Username = '$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../register.php?signup=usernametaken");
          array_push($errors, "Username is already taken.");
        } 

        else {

          if ($password != $cpassword) {
            array_push($errors, "Password does not match.");
          }

          else {
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

else {
  header("Location: ../register.php");
  exit();
}