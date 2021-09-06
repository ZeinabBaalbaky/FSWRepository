<?php
	session_start();
	include("connection.php"); 

	if(isset($_POST["first_name"]) && $_POST["first_name"] != ""){
		$first_name = $_POST["first_name"];
	}
	else{
     	die("Fisrt name is required!");
		
	}
	if(isset($_POST["last_name"]) && $_POST["last_name"] != ""){
		$last_name = $_POST["last_name"];
	}
	else{
     	die("Last name is required!");
		
	}
	
	if(isset($_POST["phone"]) && $_POST["phone"] != ""){
		$phone = $_POST["phone"];
	}
	else{
     	die("phone name is required!");
		
	}

	if(isset($_POST["email"]) && $_POST["email"] != ""){
		$email = $_POST["email"];
	}
	else{
		die("email is required!");
	}

	if(isset($_POST["password"]) && $_POST["password"] != ""){
		$password = hash('sha256', $_POST['password']);
	}
	else{
		die("password is required!");
	}
	if(isset($_POST["gender"]) && $_POST["gender"] != ""){
		$gender = $_POST["gender"];
	}
	if(isset($_POST["confirmPassword"]) && $_POST["confirmPassword"] != ""){
		$confirmPwd = hash('sha256', $_POST['confirmPassword']);
		if($confirmPwd  != $password){
				die("password and confirm password are not the same!");
		}	
	}
	else{
		die(" confirm password is required!");
	}
	
	//check if the email is already registered
	
	$sql="SELECT email FROM users WHERE email='$email'";
	$result=mysqli_query($connection,$sql);
	//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result) == 1)
	{ 
		echo "This email is already registered!";
	}
    //if email not registered
	else{
	$x = $connection->prepare("INSERT INTO users (first_name,last_name,phone_number,email,password,gender) VALUES (?,?,?,?,?,?)");
	$x->bind_param("sssssi", $first_name,$last_name,$phone, $email, $password,$gender);
	$x->execute();
	$x->close();
	$connection->close();
	header("Location:SignIn.html");
}

?>