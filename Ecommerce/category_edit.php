<?php
		include("conn.php");

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
         	$conn = $pdo->open();
			$stmt = $conn->prepare("UPDATE categories SET name=:name WHERE id=:id");
			$stmt->execute(['name'=>$name, 'id'=>$id]);

	
		
		$pdo->close();
	}
	

	header('location: CategoriesMain.php');

?>