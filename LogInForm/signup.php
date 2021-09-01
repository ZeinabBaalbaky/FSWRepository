<?php
	session_start();
	include("connection.php"); 

	if(isset($_POST["name"]) && $_POST["name"] != ""){
		$name = $_POST["name"];
	}
	else{
     	die("name is required!");
		
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
	if(isset($_POST["confirmPwd"]) && $_POST["confirmPwd"] != ""){
		$confirmPwd = hash('sha256', $_POST['confirmPwd']);
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
	$x = $connection->prepare("INSERT INTO users (name,email,password,gender) VALUES (?, ?, ?,?)");
	$x->bind_param("ssss", $name, $email, $password,$gender);
	$x->execute();
	$x->close();
	$connection->close();
	$_SESSION['name'] = $name; 
	$_SESSION['gender'] = $gender; 
	 header("Location:home.php");}

?>