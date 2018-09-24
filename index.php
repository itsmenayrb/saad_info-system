<?php include 'header.php'; ?>

<div class="main-container">
	<?php
			if (isset($_SESSION['user_ID'])) {
				echo "<h1>You are logged in</h1>";
			}
	?>

	<!-- Greetings to the user -->
	<img src="http://1.bp.blogspot.com/-XehccLXiIrY/U9RkEPDEfzI/AAAAAAAAAGI/zLeF-nD8jVs/s1600/10577071_1444145629197316_3578534339715827921_n.jpg">
	<img src="http://1.bp.blogspot.com/-4pLC3WsNxRo/U9RkIOwtv0I/AAAAAAAAAGc/ZRUlty9d9oM/s1600/1451456_1444145622530650_8604715179296023340_n.jpg">
</div>

<?php include 'footer.php';?>