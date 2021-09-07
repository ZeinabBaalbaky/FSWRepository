<?php

	include 'conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$quantity =  $_POST['quantity'];


		$conn = $pdo->open();


			$stmt = $conn->prepare("UPDATE products SET name=:name,  category_id=:category, price=:price,quantity=:quantity WHERE id=:id");
			$stmt->execute(['name'=>$name ,'category'=>$category, 'price'=>$price,'quantity'=>$quantity, 'id'=>$id]);
			$_SESSION['success'] = 'Product updated successfully';
			



		$pdo->close();
	}

	header('location: HomeStore.php');

?>