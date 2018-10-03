<?php include 'header.php'; ?>

<div class="main-container">
	<?php
			if (isset($_SESSION['id'])) {
				echo "<h1>You are logged in</h1>";
			}
	?>
	
	<div class="container" style="width:100%;">
		<!-- Logo and Banner -->
		<div style="width:100%;background-color: #0f72b8;height:150px;">
				<img src="logo.png" alt="logo" height="130" width="540" style="margin-top:10px;margin-left:50px;"/>			
		</div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" style="height:500px;">
		    <div class="item active">
		      <img src="http://1.bp.blogspot.com/-XehccLXiIrY/U9RkEPDEfzI/AAAAAAAAAGI/zLeF-nD8jVs/s1600/10577071_1444145629197316_3578534339715827921_n.jpg" alt="Los Angeles" style="width:100%;height:500px;">
		    </div>
		
		    <div class="item">
		      <img src="http://1.bp.blogspot.com/-4pLC3WsNxRo/U9RkIOwtv0I/AAAAAAAAAGc/ZRUlty9d9oM/s1600/1451456_1444145622530650_8604715179296023340_n.jpg" alt="Chicago" style="width:100%;height:500px">
		    </div>
		  </div>
		
		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>

<?php include 'footer.php';?>