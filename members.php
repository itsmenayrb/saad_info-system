<!-- 
  This page will let uses add family members, while
  also letting them see their current family members
-->

<?php include_once 'header.php'; ?>

<?php
  // Id of the logged in user
  $id = $_SESSION['id'];

  $relationshipsQuery = "SELECT * FROM relationship WHERE fromUser = $id";

  // Get the relationships between the user
  $result = $conn -> query($relationshipsQuery);
  if($conn -> error) {
    echo $conn -> error;
    exit();
  }

  // If no relationships exist so far, find one... JK tell the user that they could
  // add new ones on existing accounts only
  if($result -> num_rows <= 0) {
    echo "If you have a family member that already has an account, you can add them as your family member.";
  }

  while($row = $result -> fetch_assoc()) {
    $relation_user_ID = $row -> toUser;
    $userDetailsQuery = "SELECT * FROM residents WHERE user_ID = $relation_user_ID";
    
    $result2 = $conn -> query($userDetailsQuery);
    if($conn -> error) {
      echo $conn -> error;
      exit();
    }

    $relation_user_details = $result2 -> fetch_assoc();
    $firstName = $relation_user_details -> FirstName;
    $relationship = $row -> relation;

    echo "$firstName, $relationship";
  }
?>

<form method="POST" action="">
</form>

<?php include_once 'footer.php'; ?>
