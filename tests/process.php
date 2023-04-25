<?php
// Connection parameters
$host = 'localhost';
$dbname = 'socialdb';
$username = 'root';
$password = '';

// Create a MySQLi connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start session
session_start();

// Check if user submitted the login form
if (isset($_POST['login'])) {
    // Get username and password from form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Prepare the SQL statement to check if username and password match
    $sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";

    // Execute the statement
    $result = mysqli_query($conn, $sql);

    // Check if any rows were returned
    if (mysqli_num_rows($result) == 1) {
        // Authentication succeeded, set user_id session variable
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];

        // Redirect user to protected page
        header('Location: protected.php');
        exit;
    } else {
        // Authentication failed, redirect user back to login form with error message
        $_SESSION['login_error'] = 'Invalid username or password';
        header('Location: login.php');
        exit;
    }
} else {
    // User did not submit the login form, redirect to login form
    header('Location: login.php');
    exit;
}

// Close the connection
mysqli_close($conn);
?>
