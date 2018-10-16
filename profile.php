<?php include 'header.php'; ?>

<div class="container main-section">
	<?php if(isset($_SESSION['Username'])) { ?>
	<legend class="form-text text-center" style="color:black; font-size:2.5vw;text-transform: capitalize;">
		<?php
			$current = $_SESSION['Username'];
			$sql = "SELECT * FROM users INNER JOIN residents ON users.id = residents.user_ID WHERE users.Username ='".$current."'";
			$results = mysqli_query($conn, $sql);
			$resultsCheck = mysqli_num_rows($results);

			if($resultsCheck > 0){
				while($row = $results->fetch_assoc()){
					echo $row['FirstName'] . ' ' . $row['MiddleName'] . ' ' . $row['LastName'] . ' ' . $row['Suffix'] . '' . '</legend>';
					echo "<div class='table-responsive' style='width: 900px;margin: 0 auto;max-width:100%;'>";
					echo "<table class='table table-hover table-bordered table-dark'><tr><td>Gender: </td>";
					echo "<td>" . $row['Sex'] . "</td></tr>";
					echo "<tr><td>Birthday: </td>";

					$date = $row['Bday'];
					$testDate = new DateTime($date);

					echo "<td>" . $testDate->format('F-d-Y') . "</td></tr>";
					echo "<tr><td>Age: </td>";
					echo "<td>" . $row['Age'] . "</td></tr>";
					echo "<tr><td>Birth Place: </td>";
					echo "<td>" . $row['Bplace'] . "</td></tr>";
					echo "<tr><td>Home Address: </td>";
					echo "<td>" . $row['Homeaddress'] . "</td></tr>";
					echo "<tr><td>Contact Number: </td>";
					echo "<td>" . $row['TelephoneNumber'] . " / " . $row['CellphoneNumber'] . "</td></tr></table>";
					echo "</div>";
				}
			}
			$conn->close();
		?>
	<?php } else { ?>
		<p class="display-2 text-center">You must log-in first!</p>
	<?php } ?>
</div>