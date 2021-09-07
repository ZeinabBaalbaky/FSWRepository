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
	if(isset($_POST["UserType"]) && $_POST["UserType"] != ""){
		$UserType = $_POST["UserType"];
	}else{
		die("You should choose user type");
	}
	
	if( $UserType ==1){
		
        $query="SELECT * FROM users WHERE email='$email' and password='$password'";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
	}
	else{
		if($UserType ==2){
			 $query="SELECT * FROM stores WHERE email='$email' and password='$password'";
             $stmt = $connection->prepare($query);
             $stmt->execute();
             $result = $stmt->get_result();	
		}
	}
	if(mysqli_num_rows($result) == 1)
	{ 
		$row = $result->fetch_assoc();
		if($UserType==2){
			$_SESSION['id'] = $row['id']; 
	        $_SESSION['name'] = $row['name']; 
			header("Location:HomeStore.php");
			}
		else{
			$_SESSION['id'] = $row['id'];
			$_SESSION['first_name'] = $row['first_name']; 
			$_SESSION['last_name'] = $row['last_name']; 
			$_SESSION['email'] = $row['email'];
			header("Location:HomeUser.php");
		}
	}
	else{
		$_SESSION['error'] = "Wrong Email or password";
		//header("Location:index.php");
	}
?>