
<?php
	include 'header.php';
?>
	<div class="main-container">
		<div class="top-design">
		</div>

		<?php
				if (isset($_SESSION['user_ID'])) {
					echo "You are logged in";
				}

			?>

	</div>
<?php
	include 'footer.php';
?>