<!DOCTYPE html>
<html>
<head>
	<title>Mwimbi Social - Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<!-- nav bar specifically for signup page-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="../index.php">Mwimbi Social</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="../index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../mainnologin.php">View posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../about.php">About</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="../contact.php">Contact <span class="sr-only">(current)</span></a>
			</li>
			</ul>			
		</div>
		</nav>
		<!-- end of nav bar specifically for signup page-->


	<div class="container mt-5">

		<h2>Signup Form</h2>
		<form method="POST" action="signup.php">

			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" name="username" id="username" required>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" id="email" required>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" id="password"><br><br>
			</div>

			<input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign up">
	</div>	
	</form>
	
	<!-- Footer -->
	<?php require '../mainincludes/footer.php';?>

</body>
</html>

