<?php
	include 'connection.php';
    session_start();

	$productid = $_GET['product'];
	$UserId = $_SESSION['id'];
	$quantity =1;

		$stmt = $connection->prepare("INSERT INTO cart(product_id, quantity, user_id) VALUES (?,?,?)");
	    $stmt->bind_param("iii", $productid,$quantity,$UserId);
	    $stmt->execute();
        $id = $_SESSION['CatId'] ;
		$name =$_SESSION['CatName'];
	    header("Location:category.php?category=$id&name=$name");
		

?>