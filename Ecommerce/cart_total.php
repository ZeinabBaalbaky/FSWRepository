<?php
	include 'connection.php';

	if(isset($_SESSION['id'])){
     $id= $_SESSION['id'];

		$stmt = $connection->prepare("SELECT * FROM cart LEFT JOIN products on products.id=cart.product_id WHERE cart.user_id='$id'");
		$stmt->execute();
        $result= $stmt->get_result();
		$total = 0;
		while($row = $result->fetch_assoc()){
			$subtotal = $row['price'] * $row['quantity'];
			$total += $subtotal;
		}

	

		echo json_encode($total);
	}
?>