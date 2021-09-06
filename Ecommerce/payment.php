<?php

	session_start();
	include("conn.php"); 

	  $id = $_SESSION['id'];
	  $total = $_SESSION['total'];
		$date = date('Y-m-d');

		$conn = $pdo->open();

	
			
			$stmt = $conn->prepare("INSERT INTO sales (user_id, total) VALUES (:user_id, :total)");
			$stmt->execute(['user_id'=>$id, 'total'=>$total]);
			$salesid = $conn->lastInsertId();
			
		
				$stmt = $conn->prepare("SELECT cart.quantity,cart.product_id FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id='$id'");
				$stmt->execute();

				foreach($stmt as $row){
					$stmt = $conn->prepare("INSERT INTO sale_details (sale_id, product_id, quantity,date,user_id) VALUES (:sale_id, :product_id, :quantity,:date,:user_id)");
					$stmt->execute(['sale_id'=>$salesid , 'product_id'=>$row['product_id'], 'quantity'=>$row['quantity'],'date'=>$date,'user_id'=>$id]);
				}

				$stmt = $conn->prepare("DELETE FROM cart WHERE user_id='$id'");
				$stmt->execute();

				$_SESSION['success'] = 'Transaction successful. Thank you.';


		$pdo->close();

	
	header('location: HomeUser.php');
	
?>