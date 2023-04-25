<?php 
    require 'requireforms/nav.php';
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Login</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Connect to database
                $db = mysqli_connect('localhost', 'root', '', 'socialdb');

                // Check if username and password match
                $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                $result = mysqli_query($db, $query);

                if (mysqli_num_rows($result) > 0) {
                    // Login successful, redirect to home.php
                    header("Location: ../mainsite.php");
                    exit;
                } else {
                    $query = "SELECT * FROM users WHERE email='$email'";
                    $result = mysqli_query($db, $query);

                    if (mysqli_num_rows($result) > 0) {
                        // Invalid password
                        echo "<div class='alert alert-danger mt-4'>Invalid password.</div>";
                    } else {
                        // Invalid username
                        echo "<div class='alert alert-danger mt-4'>Invalid email.</div>";
                    }
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- Navbar -->
<?php require '../mainincludes/footer.php'; ?>
