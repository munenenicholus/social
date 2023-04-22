<!DOCTYPE html>
<html>
<head><title>Create New Post</title>
	<!-- Add Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

		<!--nav bar-->

		<?php require 'mainincludes/nav.php';?>

	<div class="container">
		<h1>Create New Post</h1>
		<form action="" method="post">
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" name="title" id="title" required>
			</div>
			
			<div class="form-group">
				<label for="content">Content:</label>
				<textarea class="form-control" name="content" id="content" rows="5" required></textarea>
			</div>
			
			<div class="form-group">
				<label for="author">Author:</label>
				<input type="text" class="form-control" name="author" id="author" required>
			</div>
			
		
			
			<button type="submit" nameclass="btn btn-primary">Create Post</button>
		</form>
	</div>
</body>
</html>

<?php
// Connect to database
$db_host = "localhost";
$db_name = "socialdb";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
   

    // Insert data into "posts" table
    $sql = "INSERT INTO posts (title, content, author, date) VALUES ('$title', '$content', '$author', current_timestamp())";

    if (mysqli_query($conn, $sql)) {

		header("Location: mainsite.php");
		
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>



		<!--footer-->

		<?php require 'mainincludes/footer.php';?>










