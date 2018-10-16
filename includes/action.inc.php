<?php
    include 'dbh.inc.php';
   
    // Initializing Variables
  $username = "";
  $email = "";
  $securityquestiononeanswer = "";
  $securityquestiontwoanswer = "";
  $password = "";
  $cpassword = "";

  $prefix =  "";
  $fname = "";
  $mname = "";
  $lname = "";
  $suffix =  "";
  $gender =  "";
  $birthday = "";
  $age ="";
  $birthplace = "";
  $block = "";
  $street =  "";
  $subdivision = "";
  $cellphonenumber = "";
  $telephonenumber = "";

$errors = array();
//-----------------------------------------------------------------------------------

if (isset($_POST['submit'])) {
  $username = checkInput($_POST['username']);
  $email = checkInput($_POST['email']);
  $securityquestionone = checkInput($_POST['securityquestionone']);
  $securityquestiononeanswer = checkInput($_POST['securityquestiononeanswer']);
  $securityquestiontwo = checkInput($_POST['securityquestiontwo']);
  $securityquestiontwoanswer = checkInput($_POST['securityquestiontwoanswer']);
  $password = checkInput($_POST['password']);
  $cpassword = checkInput($_POST['cpassword']);
  
  //PERSONAL INFORMATION

  $prefix = checkInput($_POST['prefix']);
  $fname = checkInput($_POST['fname']);
  $mname = checkInput($_POST['mname']);
  $lname = checkInput($_POST['lname']);
  $suffix = checkInput($_POST['suffix']);
  $gender = checkInput($_POST['gender']);
  $birthday = checkInput($_POST['birthday']);
  $age = checkInput($_POST['age']);
  $birthplace = checkInput($_POST['birthplace']);
  $block = checkInput($_POST['block']);
  $street = checkInput($_POST['street']);
  $subdivision = checkInput($_POST['subdivision']);
  $telephonenumber = checkInput($_POST['telephonenumber']);
  $cellphonenumber = checkInput($_POST['cellphonenumber']);

  $address = $block . " " .$street . " " .$subdivision . " Barangay Salitran II, Dasmariñas City, Cavite, Philippines, 4114. ";

  $dateCreated = date('Y-m-d');

  // Checking Username and Email
  $sql=$conn->prepare("SELECT Username,Email FROM users WHERE Username=? OR Email=?");
  $sql->bind_param("ss",$username,$email);
  $sql->execute();
  $result=$sql->get_result();
  $row=$result->fetch_array(MYSQLI_ASSOC);

  if($row['Username'] == $username){
    array_push($errors, "Username is already used.");
  }

  if($row['Email'] == $email){
    array_push($errors, "Email is already used.");
  }

  if (!preg_match("/^[a-zA-Z0-9]{5,}$/" , $username)){
    array_push($errors, "Username must not contain spaces or special characters.");
  }

  if (!preg_match("/^[a-zA-Z ]*$/" , $fname) ||!preg_match("/^[a-zA-Z ]*$/" , $mname) || !preg_match("/^[a-zA-Z ]*$/" , $lname)) {
    array_push($errors, "Your name must not contain numbers or special characters.");
  }

  if($securityquestionone == "" || $securityquestiontwo == ""){
    array_push($errors, "Please select a security question as you can use this to reset your password.");
  }

  if(!empty($telephonenumber) || !empty($cellphonenumber)){
    if(!preg_match("/^[0-9]$/",$telephonenumber) || !preg_match("/^[0-9]$/",$cellphonenumber)){
      array_push($errors, "You have entered invalid contact number. Please check your inputs!");
    }
  }

  if(count($errors) == 0){

    try{
      $birthday = date('Y-m-d', strtotime($birthday));
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $conn->beginTransaction();

      $conn->exec("INSERT INTO users (Username, Email, Password, SecurityQuestion1, AnswerOne, SecurityQuestion2, AnswerTwo, DateCreated) 
      VALUES ('$username','$email','$hashedPassword','$securityquestionone','$securityquestiononeanswer','$securityquestiontwo','$securityquestiontwoanswer','$dateCreated')");
      $conn->exec("INSERT INTO residents (Prefix, FirstName, MiddleName, LastName, Suffix, Sex, Bday, Age, Bplace, HomeAddress, TelephoneNumber,CellphoneNumber) 
      VALUES ('$prefix','$fname','$mname','$lname','$suffix','$gender','$birthday','$age','$birthplace','$address','$telephonenumber','$cellphonenumber')");
      $conn->exec("INSERT INTO address (block, street, subdivision) VALUES ('$block','$street','$subdivision')");

      $conn->commit();
      echo "<script>alert('Registered Successfully!');</script>";
      header("Location: ../login.php");
      exit();
    }
    catch(PDOException $e){
      $conn->rollback();
      echo "Error: ".$e->getMessage();
    }
    $conn = null;   
  }
}
//-------------------------------------------------------------------------------------------
// login

if(isset($_POST['login'])) {

	$Username = checkInput($_POST['username']);
	$Password = checkInput($_POST['password']);

	//Error handlers
	// Check naman kapag nasa database na yung info o nakapag-register na.

	$sql = "SELECT * FROM users WHERE Username='$Username' OR Email='$Username'";
	$results = mysqli_query($conn, $sql);
	$resultsCheck = mysqli_num_rows($results);

	if($resultsCheck < 1){
		array_push($errors,"Incorrect username or password!");
	}

	else {
		//Pagccheck naman kung tama ba yung password
		if ($row = mysqli_fetch_assoc($results)) {
			//De-hashing the password
			$hashedPasswordCheck = password_verify($Password, $row['Password']);
			if ($hashedPasswordCheck == false) {
				array_push($errors, "Something went wrong. Please try again later.");
				exit();
			}
			elseif ($hashedPasswordCheck == true) {
				//Log in the user here
				$_SESSION['Username'] = $row['Username'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['Email'] = $row['Email'];
				header("Location: ../index.php");
				exit();
			}
		}
	}
}
?>