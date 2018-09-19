<?php include 'header.php'; ?>

<div class="main-container">
	<?php
			if (isset($_SESSION['user_ID'])) {
				echo "You are logged in";
			}
	?>

	<h3>Welcome to the Salitran II Online Help Desk</h3>
</div>

<?php include 'footer.php';?>