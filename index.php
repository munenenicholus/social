<!DOCTYPE html>
<html>
<head>
	<title>Mwimbi Social</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		.card.shadow {
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
}

	/* Add animation to the cards */
	.card {
	transition: transform 1.5s ease;
	}

	.card:hover {
	transform: scale(1.1);
	}

	</style>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Navbar -->
	<?php require 'mainincludes/nav.php'; ?>

	<!-- Jumbotron -->
	<div class="jumbotron" style="background-image: url('images/bg.jpg');">
	  <h1>Welcome to Mwimbi Social Network!</h1>
	  <p>Join our community and share your thoughts with like-minded people.</p>
	  <a class="btn btn-primary btn-lg" href="signup/signup.php" role="button">Sign up</a>
	  <a class="btn btn-primary btn-lg" href="signup/login.php" role="button">Log in</a>
	</div>
 

	<!--cards for images -->

		<section id="cards">
	<div class="container">
		<div class="row">
		<div class="col-sm-3">
			<div class="card shadow">
			<img class="card-img-top" src="images/image.jpg" alt="Card image">
			<div class="card-body">
				<h4 class="card-title">KATHWANA TOWN</h4>
				<p class="card-text">Some example text.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card shadow">
			<img class="card-img-top" src="images/image.jpg" alt="Card image">
			<div class="card-body">
				<h4 class="card-title">CHUKA TOWN</h4>
				<p class="card-text">Some example text.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card shadow">
			<img class="card-img-top" src="images/image.jpg" alt="Card image">
			<div class="card-body">
				<h4 class="card-title">CHOGORIA TOWN</h4>
				<p class="card-text">Some example text.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card shadow">
			<img class="card-img-top" src="images/image.jpg" alt="Card image">
			<div class="card-body">
				<h4 class="card-title">THARAKA TOWN</h4>
				<p class="card-text">Some example text.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
			</div>
		</div>
		</div>
	</div>
	</section>
<br><br>


	<!-- Features section -->
	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h2>Share your thoughts</h2>
					<p>Express yourself and share your ideas with the world.</p>
				</div>
				<div class="col-sm-4">
					<h2>Connect with others</h2>
					<p>Connect with like-minded individuals and build meaningful relationships.</p>
				</div>
				<div class="col-sm-4">
					<h2>Discover new perspectives</h2>
					<p>Explore new ideas and broaden your horizons.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php require 'mainincludes/footer.php';?>

</body>
</html>