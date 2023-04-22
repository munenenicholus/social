<?php  

//connecting to db
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
	include 'connect.php';
	
//validation
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($username) || empty($email) || empty($email)) {
		header("Location: register.php");
	}else {

		$sql = "INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
		$result = mysqli_query($connect, $sql);

		if ($result) {
			header("location:http://localhost/social/mainsite.php");
		}else {
			echo "User not sent!";
		}
	}

}else {
	header("Location: register.php");
}

