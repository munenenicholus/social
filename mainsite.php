<!DOCTYPE html>
<html>
	<head>
		<title>Mwimbi Social - Posts</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body>
				<!-- Navbar --> 
				<?php require 'mainincludes/nav2.php'; ?>

				<!-- Page content -->
					<div class="container">
								<div class="row">
									<div class="col-md-8">
									<?php
						// Connect to the database
						$conn = mysqli_connect('localhost', 'root', '', 'socialdb');

						// Check if the connection was successful
						if (!$conn) {
							die('Connection failed: ' . mysqli_connect_error());
						}

						// Define how many posts to show per page
						$posts_per_page = 5;

						// Calculate the number of pages
						$sql = 'SELECT COUNT(*) as total FROM posts';
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						$total_posts = $row['total'];
						$total_pages = ceil($total_posts / $posts_per_page);

						// Determine the current page
						if (isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <= $total_pages) {
							$current_page = $_GET['page'];
						} else {
							$current_page = 1;
						}

						// Calculate the offset
						$offset = ($current_page - 1) * $posts_per_page;

						// Fetch posts from the database
						$sql = "SELECT * FROM posts ORDER BY date DESC LIMIT $offset, $posts_per_page";
						$result = mysqli_query($conn, $sql);

						// Check if there are any posts
						if (mysqli_num_rows($result) > 0) {
							// Display each post
							while ($row = mysqli_fetch_assoc($result)) {
								echo '<div class="card mb-3">';
								echo '<div class="card-body">';
								echo '<h5 class="card-title">' . $row['title'] . '</h5>';
								echo '<p class="card-text">' . $row['content'] . '</p>';
								echo '<a href="#" class="card-link">Read more</a>';
								echo '</div>';
								echo '<div class="card-footer text-muted">';
								echo 'Posted on ' . $row['date'] . ' by ' . $row['author'];
								echo '</div>';
								echo '</div>';
							}
						} else {
							echo 'No posts found.';
						}

						// Generate pagination links
						echo '<nav aria-label="Page navigation">';
						echo '<ul class="pagination justify-content-center">';

						// "Previous" link
						if ($current_page == 1) {
							echo '<li class="page-item disabled">';
						} else {
							echo '<li class="page-item">';
						}
						echo '<a class="page-link" href="?page=' . ($current_page - 1) . '" tabindex="-1">Previous</a>';
						echo '</li>';

						// Page links
						for ($i = 1; $i <= $total_pages; $i++) {
							if ($i == $current_page) {
								echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
							} else {
								echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
							}
						}

						// "Next" link
						if ($current_page == $total_pages) {
							echo '<li class="page-item disabled">';
						} else {
							echo '<li class="page-item">';
						}
						echo '<a class="page-link" href="?page=' . ($current_page + 1) . '">Next</a>';
						echo '</li>';

						echo '</ul>';
						echo '</nav>';

						// Close the database connection
						mysqli_close($conn);
						?>
					
					</div>
					<div class="col-md-4">
						


					


						<!-- Sidebar widget -->
						<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title">Search</h5>
							<form>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search...">
								<div class="input-group-append">
								<button class="btn btn-secondary" type="button">Go</button>
								</div>
							</div>
							</form>
						</div>
						</div>

						<!-- Sidebar widget -->
						<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title">Categories</h5>
							<ul class="list-group">
							<li class="list-group-item"><a href="#">Category 1</a></li>
							<li class="list-group-item"><a href="#">Category 2</a></li>
							<li class="list-group-item"><a href="#">Category 3</a></li>
							</ul>
						</div>
						</div>

						<!-- Sidebar widget -->
						<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title">Another Category</h5>
							<ul class="list-group">
							<li class="list-group-item"><a href="#">Category 1</a></li>
							<li class="list-group-item"><a href="#">Category 2</a></li>
							<li class="list-group-item"><a href="#">Category 3</a></li>
							</ul>
						</div>
						</div>


						<!-- Sidebar widget -->
						<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title">Tags</h5>
							<div class="btn-group" role="group">
							<button type="button" class="btn btn-secondary">Tag 1</button>
							<button type="button" class="btn btn-secondary">Tag 2</button>
							<button type="button" class="btn btn-secondary">Tag 3</button>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			



		<!-- footer -->
		<?php require 'mainincludes/footer.php';?>


		<!-- Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src=""https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	</body>
</html>

