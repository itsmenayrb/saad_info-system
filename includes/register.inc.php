<?php

include "dbh.inc.php";
//dbh.inc.php yung filename ng connector sa database, $conn naman yung variable.

if (isset($_POST['submit'])) {

  // Sign-in Information

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $securityquestionone = mysqli_real_escape_string($conn, $_POST['securityquestionone']);
  $securityquestiononeanswer = mysqli_real_escape_string($conn, $_POST['securityquestiononeanswer']);
  $securityquestiontwo = mysqli_real_escape_string($conn, $_POST['securityquestiontwo']);
  $securityquestiontwoanswer = mysqli_real_escape_string($conn, $_POST['securityquestiontwoanswer']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

  // Personal Information

  $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $mname = mysqli_real_escape_string($conn, $_POST['mname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $suffix = mysqli_real_escape_string($conn, $_POST['suffix']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $birthplace = mysqli_real_escape_string($conn, $_POST['birthplace']);
  $block = mysqli_real_escape_string($conn, $_POST['block']);
  $street = mysqli_real_escape_string($conn, $_POST['street']);
  $subdivision = mysqli_real_escape_string($conn, $_POST['subdivision']);
  $telephonenumber = mysqli_real_escape_string($conn, $_POST['telephonenumber']);
  $cellphonenumber = mysqli_real_escape_string($conn, $_POST['cellphone']);
  
  $address = $block . " " .$street . " " .$subdivision . " Barangay Salitran II, Dasmariñas City, Cavite, Philippines, 4114. ";


  //Error handler

  $errors = array();

  //Checking username

  if (!preg_match("/^[a-zA-Z0-9]{5,}$/" , $username)){
    header("Location: ../register.php?signup=uerror");
    array_push($errors, "Invalid username");
    exit();
  }

  else{
    $sql = "SELECT * FROM users WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      header("Location: ../register.php?signup=usernametaken");
      array_push($errors, "Username is already used.");
      exit();
    } 

    else {
      // Check if email is valid 
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?signup=email");
        array_push($errors, "Please enter a valid email address!");
        exit();
      }

      else{
        $sql = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../register.php?signup=emailexist");
          array_push($errors, "Email is already used.");
          exit();
        }

        else{   
          //checking if terms and privacy policy is checked
          if(!isset($_POST['checkboxTerms'])){
            header("Location: ../register.php?signup=terms");
            array_push($errors,"Please indicate that you are agreeing to our terms and privacy policy");
            exit();
          }
          
          else{
            // Check if input characters are valid, dapat letters and spaces lang
            if (!preg_match("/^[a-zA-Z ]*$/" , $fname) || !preg_match("/^[a-zA-Z ]*$/" , $lname)) {
              header("Location: ../register.php?signup=invalid");
              array_push($errors, "You have entered invalid characters!");
              exit();
            }
            else{
              // Check if birthday is not numeric
              if(!is_numeric($birthday)){
                header("Location: ../register.php?signup=date");
                array_push($errors, "You have entered invalid birthdate");
                exit();
              }
              else{
                //Checking password
                if (!preg_match("/^[a-zA-Z0-9]{8,}$/" , $password)){
                  header("Location: ../register.php?signup=perror");
                  array_push($errors, "Password should be at least eight characters.");
                  exit();
                }
                else {
                  if ($password != $cpassword) {
                    header("Location: ../register.php?signup=pwderror");
                    array_push($errors,"Password do not match.");
                    exit();
                  }
                  else{
                    // check if may contact number
                    if(!empty($telephonenumber) || !empty($cellphonenumber)){
                      if (!is_numeric($telephonenumber) || (!is_numeric($cellphonenumber))){
                        header("Location: ../register.php?signup=tnumbererror");
                        array_push($errors, "You have entered invalid contact number");
                        exit();
                      }
              
                      else{
                        if(strlen($telephonenumber) != 10 || strlen($cellphonenumber) != 11){
                          header("Location: ../register.php?signup=tcnerror");
                          array_push($errors, "You have entered invalid contact number");
                          exit();
                        }

                        else{
                          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                          //Insert the user into the database
                          
                          $sql1 = "INSERT INTO users (Username, Email, Password, SecurityQuestion1, AnswerOne, SecurityQuestion2, AnswerTwo) VALUES ('$username', '$email', '$hashedPassword', '$securityquestionone' , '$securityquestiononeanswer' , '$securityquestiontwo' , '$securityquestiontwoanswer');";
                          $sql2 = "INSERT INTO residents (Prefix, FirstName, MiddleName, LastName, Suffix, Sex, Bday, Age, Bplace, Homeaddress, TelephoneNumber, CellphoneNumber) VALUES ('$prefix', '$fname', '$mname', '$lname', '$suffix', '$gender', '$birthday', '$age' , '$birthplace', '$address' , '$telephonenumber' , '$cellphonenumber');";
                          $sql3 = "INSERT INTO address (block, street, subdivision) VALUES ('$block', '$street', '$subdivision');"; 
                       
                          mysqli_query($conn, $sql1);
                          mysqli_query($conn, $sql2);
                          mysqli_query($conn, $sql3);
                      
                          header("Location: ../register.php?signup=success");
                          exit();    
                        }
                      }
                    }
                    //kahit walang contact mag pproceed.
                    else{
                      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                      //Insert the user into the database
                       
                      $sql1 = "INSERT INTO users (Username, Email, Password, SecurityQuestion1, AnswerOne, SecurityQuestion2, AnswerTwo) VALUES ('$username', '$email', '$hashedPassword', '$securityquestionone' , '$securityquestiononeanswer' , '$securityquestiontwo' , '$securityquestiontwoanswer');";
                      $sql2 = "INSERT INTO residents (Prefix, FirstName, MiddleName, LastName, Suffix, Sex, Bday, Age, Bplace, Homeaddress, TelephoneNumber, CellphoneNumber) VALUES ('$prefix', '$fname', '$mname', '$lname', '$suffix', '$gender', '$birthday', '$age' , '$birthplace', '$address' , '$telephonenumber' , '$cellphonenumber');";
                      $sql3 = "INSERT INTO address (block, street, subdivision) VALUES ('$block', '$street', '$subdivision');"; 
                       
                      mysqli_query($conn, $sql1);
                      mysqli_query($conn, $sql2);
                      mysqli_query($conn, $sql3);
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
  } 
}

if(isset($_POST['cancel'])) {
  header("Location: index.php");
  die();
}