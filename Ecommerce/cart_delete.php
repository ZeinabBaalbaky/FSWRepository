<?php
	include 'conn.php';

	$conn = $pdo->open();

	$output = array('error'=>false);
	$id = $_POST['id'];

	
			$stmt = $conn->prepare("DELETE FROM cart WHERE id=:id");
			$stmt->execute(['id'=>$id]);
			$output['message'] = 'Deleted';
			


	$pdo->close();
	echo json_encode($output);

?>