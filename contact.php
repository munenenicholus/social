<!DOCTYPE html>
<html>
<head>
	<title>Mwimbi Social - Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Navbar -->
	<?php require 'mainincludes/nav.php'; ?>

	<!-- Contact section -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Get in touch</h2>
						<form method="post">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" id="message" rows="5"></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>

						<?php
						// Connect to the database
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "socialdb";

						$conn = mysqli_connect($servername, $username, $password, $dbname);

						// Check connection
						if (!$conn) {
						  die("Connection failed: " . mysqli_connect_error());
						}

						if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						  // Validate the form data
						  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
						    echo "Please fill in all fields";
						  } else {
						    // Prepare the statement
						    $stmt = mysqli_prepare($conn, "INSERT INTO email (name, email, message) VALUES (?, ?, ?)");

						    // Bind the parameters
						    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

						    // Retrieve data from the form
						    $name = $_POST['name'];
						    $email = $_POST['email'];
						    $message = $_POST['message'];

						    // Execute the statement
						    if (mysqli_stmt_execute($stmt)) {
						      echo "Your email was sent successfully";
						    } else {
						      echo "Error: " . $sql . "<br>" . mysqli_stmt_error($stmt);
						    }

						    // Close the statement
						    mysqli_stmt_close($stmt);
						  }
						}

						// Close the connection
						mysqli_close($conn);
						?>

				</div>
				<div class="col-md-6">
					<h2>Contact Information</h2>
					<p>Please feel free to contact us with any questions or concerns.</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-envelope"></i> emoredesigns39@gmail.com</li>
						<li><i class="fa fa-phone"></i> 0713954944</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php require 'mainincludes/footer.php';?>
</body>
</html>