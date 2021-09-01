<?php
	
	session_start();
	include("connection.php");
	if(isset($_POST["email"]) && $_POST["email"] != ""){
		$email = $_POST["email"];
	}else{
		die("Email is Required");
	}

	if(isset($_POST["password"]) && $_POST["password"] != ""){
		$password = hash('sha256', $_POST['password']);
	}else{
		die("Password is required");
	}
	
    $query="SELECT * FROM users WHERE email='$email' and password='$password'";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
	if(mysqli_num_rows($result) == 1)
	{ 
		$row = $result->fetch_assoc();
		$_SESSION['name'] = $row['name']; 
	    $_SESSION['gender'] = $row['gender']; 
		
		header("Location:home.php");
		
	}
	else{
		$_SESSION['error'] = "Wrong Email or password";
		header("Location:index.php");
	}

	

?>