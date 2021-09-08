<?php
	include 'conn.php';


		$id = $_POST['id'];
		
		$conn = $pdo->open();


			$stmt = $conn->prepare("DELETE FROM categories WHERE id=:id");
			$stmt->execute(['id'=>$id]);


		
		$pdo->close();



	header('location: CategoriesMain.php');
	
?>