<?php

	include("connection.php"); 


	session_start();
	
	
	
	if(isset($_POST["name"]) && $_POST["name"] != ""){
		$name = $_POST["name"];
	}
	else{
     	die("name is required!");
		
	}
	if(isset($_POST["category"]) && $_POST["category"] != ""){
		$category = $_POST["category"];
	}
	else{
     	die("category is required!");
		
	}
	
	if(isset($_POST["price"]) && $_POST["price"] != ""){
		$price = $_POST["price"];
	}
	else{
     	die("price is required!");
		
	}
	$filename = $_FILES['photo']['name'];
	if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $name.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], 'Images/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}


    $store_id= 1;
	$x = $connection->prepare("INSERT INTO products (name,price,store_id,image,category_id) VALUES (?,?,?,?,?)");
	$x->bind_param("sdisi", $name,$price, $store_id,$new_filename,$category);
	$x->execute();
	$x->close();
	$connection->close();




	header('location: HomeStore.php');

?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


?>