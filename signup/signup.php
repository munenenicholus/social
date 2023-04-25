<?php  

//connecting to db
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password'])) {
	include 'connect.php';
	
//validation
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
		header("Location: register.php");
	}else {

		$sql = "INSERT INTO users(fname, lname, email, password) VALUES('$fname','$lname','$email','$password')";
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

