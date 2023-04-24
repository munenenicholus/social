<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<!-- nav bar specifically for login page-->
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
		<!-- end of nav bar specifically for login page-->


	<div class="container mt-5">
		<h2 class="text-center mb-4">Login</h2>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form method="post" action="login.php">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" name="username" required>
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
				</form>
				<?php
					if (isset($_POST['submit'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];

						// Connect to database
						$db = mysqli_connect('localhost', 'root', '', 'socialdb');

						// Check if username and password match
						$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
						$result = mysqli_query($db, $query);

						if (mysqli_num_rows($result) > 0) {
							// Login successful, redirect to home.php
							header("Location: ../mainsite.php");
							exit;
						} else {
							echo "<div class='alert alert-danger mt-4'>Invalid username or password.</div>";
						}
					}
				?>
			</div>
		</div>
	</div>

	<!-- Navbar -->
	<?php require '../mainincludes/footer.php'; ?>

</body>
</html>
