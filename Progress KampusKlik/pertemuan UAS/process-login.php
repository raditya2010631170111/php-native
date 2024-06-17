<?php
include_once("./koneksi.php");
if(isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = password_hash($_POST['password'];
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query ($db, $sql);
	
	//jika lebih dari 0
	if (mysqli_num_rows($result) > 0){
		$row = mysqli_num_rows($result) >0){
		$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')"
		
		if(password_verify($password, $row['password'])) {
			$_SESSION['email' = $email;
			header("Location: index.php");
			exit;
		
		
	} else {
		echo "Password salah.";
	}
}
	
?>