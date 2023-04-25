
		<!-- nav bar specifically for signup page-->
		<?php
			require 'requireforms/nav.php';
		?>


	<div class="container mt-5">

		<h2>Signup Form</h2>
		<form method="POST" action="signup.php">

			<div class="form-group">
				<label for="fname">First name:</label>
				<input type="text" class="form-control" name="fname" id="fname" required>
			</div>

			<div class="form-group">
				<label for="lname">Last name:</label>
				<input type="lname" class="form-control" name="lname" id="lname" required>
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

